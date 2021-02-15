/**
 * Project Frontend Entry Point
 */

const appleIsPresent = document.getElementById('apple-is-present');

// 🍏 Apple (only loads if element exists on the page)
appleIsPresent && // eslint-disable-line no-unused-expressions
	import('./components/apple').then(({ default: Apple }) => {
		Apple();
	});

// 🍌 Bannana
import('./components/bannana').then(({ default: Bannana }) => {
	Bannana();
});

// 🍒 Cherry
import('./components/cherry').then(({ default: Cherry }) => {
	Cherry();
});
