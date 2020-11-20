'use strict';
const CACHE_VERSION = '3';
let CURRENT_CACHES = {
	offline: 'offline-v' + CACHE_VERSION,
	musicco: 'musicco-v' + CACHE_VERSION,
	playlist: 'playlist'
};

const OFFLINE_URL = 'offline.html';

var urlsToCache = [
	'./'
];

function firstWindowClient() {
	return clients.matchAll({ type: 'window' }).then(function(windowClients) {
		return windowClients.length ? windowClients[0] : Promise.reject("No clients");
	});
}

self.addEventListener('install', event => {
  event.waitUntil(
    self.skipWaiting()
			.then(function() {
				fetch(OFFLINE_URL)
			.then(function(response) {
				return caches.open(CURRENT_CACHES.offline)
				.then(function(cache) {
						return cache.put(OFFLINE_URL, response);
				});
			})
			})
	);
	event.waitUntil(
		caches.open(CURRENT_CACHES.musicco)
			.then(function(cache) {
				return cache.addAll(urlsToCache);
			})
	);
});

self.addEventListener('activate', event => {
	// Delete all caches that aren't named in CURRENT_CACHES.
	let expectedCacheNames = Object.keys(CURRENT_CACHES).map(function(key) {
		return CURRENT_CACHES[key];
	});

	event.waitUntil(
		self.clients.claim().then(function() {caches.keys().then(cacheNames => {
			return Promise.all(
				cacheNames.map(cacheName => {
					if (expectedCacheNames.indexOf(cacheName) === -1) {
						// If this cache name isn't present in the array of "expected" cache names, then delete it.
						console.log('Deleting out of date cache:', cacheName);
						return caches.delete(cacheName);
					}
				})
			);
		})
		})
	);
});

self.addEventListener('message', function(event){
		self.clients.claim();
		switch (event.data.command) {
			case "preload":
				console.log("preloading");
				caches.open("playlist")
					.then(cache => cache.addAll(event.data.tracks)
						.catch(error => {
								console.log("While caching playlist, got: " + error);
							})
					);
				// Why is deletion active?
				caches.open("playlist")
					.then(function(cache) {
						cache.keys().then(function(keys) {
						keys.forEach(function(request, index, array) {
							if (event.data.tracks.indexOf(keys[index].url) === -1) {
								cache.delete(request);
							}
						})
						});
					});
			break;
			default:
				console.log("I received this message but I don't know what to do with it!")
				console.log(event.data);
		}
});

self.addEventListener('fetch', event => {
	if (event.request.mode === 'navigate' ||
			(event.request.method === 'GET' &&
			 event.request.headers.get('accept').includes('text/html'))) {
		console.log('Handling fetch event for', event.request.url);
		event.respondWith(
			fetch(event.request).catch(error => {
				return caches.match(OFFLINE_URL);
			})
		);
	}
});


self.addEventListener('notificationclick', function(event) {  
	self.clients.claim();
	var notification = event.notification;
	var actions = event.notification.actions;
	var promise = Promise.resolve();

	if (event.action === '') {
		promise = promise.then(function() { return firstWindowClient(); })
						.then(function(client) { return client.focus(); });
	} else  {  
		promise = promise.then(function() { return firstWindowClient(); })
						.then(function(client) { client.postMessage(event.action) });
	}

	event.waitUntil(promise);

}, false);