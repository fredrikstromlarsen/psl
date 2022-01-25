<script>
	import Server from './Server.svelte';
	import DatabaseType from './DatabaseType.svelte';
	import Database from './Database.svelte';
	import AuthToken from './AuthToken.svelte';
	import HashAlgo from './HashAlgo.svelte';
	import Extras from './Extras.svelte';
</script>

<main>
	<header>
		<h1>Pretty Secure Login</h1>
		<a href="https://github.com/fredrikstromlarsen/psl">Source code</a>
	</header>
	<form method="GET">
		<Server />
		<DatabaseType />
		<Database />
		<AuthToken />
		<HashAlgo />
		<Extras />
	</form>
</main>

<style>
	:root {
		--bg: #1a1c20;
		--fg: #eeeae7;
	}

	:global(body) {
		background-color: var(--bg);
		color: var(--fg);
		min-height: 100vh;
		min-width: 100vw;
		margin: 0 !important;
		padding: 0 !important;
	}
	main {
		height: 100vw;
		width: 100vh;
		padding: 2rem;
	}
</style>