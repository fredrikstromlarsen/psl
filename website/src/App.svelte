<!-- TODO:
	- Change url on:input
	- Parse GET variables on:load
	- Preview Panes
 -->

<script>
	import Options from './Options.svelte'
	// import { revealTitle } from './Animations.svelte'
</script>

<svelte:head>
	<title>Pretty Secure Login</title>
</svelte:head>
<main>
	<header>
		<h1><!-- on:hover={() => revealTitle()}>-->
			<span class="icon">撚</span>&nbsp
			<span class="dynamic-title">
				<span>Pretty&nbsp;</span>
				<span>Secure&nbsp;</span>
				<span>Login</span>
			</span>
		</h1>
	</header>
	<div class="pane-container">
		<Options />
		<div class="pane">
				Preview current selection in OSI-model
		</div>
		<div class="pane">
				Preview of all files (in a sidebar-like directory listing) with user selectable check boxes which should pre-ticked. 
				"Download selection" button at the bottom. Bundle files in a zipped archive.
		</div>
	</div>
	<footer>
		<a href="https://github.com/fredrikstromlarsen/psl">View on GitHub</a>
	</footer>
</main>

<style>
	:root {
		--bg: #1a1c20;
		--fg: #eeeae7;
		--overlay-d: #0002;
		--fg-link: #6d4bff;
		--fg-link-visited: #4d2bff;
	}

	:global(body) {
		background-color: var(--bg);
		color: var(--fg);
		min-height: 100vh;
		max-width: 100vw;

		margin: 0;
		padding: 0;

		display: flex;
		justify-content: center;
	}
	:global(a) { color: var(--fg-link); }
	:global(a:visited) { color: var(--fg-link-visited); }
	h1 {
		margin: 0;
		padding: 0;
	}
	main {
		min-height: calc(100vh - 4rem);
		width: 90vw;
		max-width: 100rem;

		display: flex;
		flex-direction: column;
	}
	.icon {
		margin: 0 0.6rem;
	}
	.pane-container {
		display: grid;
		grid-template-columns: 20rem minmax(15rem, 1fr) minmax(25rem, 35rem);
		grid-template-rows: 1fr;
		gap: 1.1rem;
	}
	:global(.pane-container>*){
		min-height: 10rem;;
		width: calc(100% - 4rem);
		padding: 2rem;
		background-color: var(--overlay-d);
		border-radius: 0.25rem;
		border: 0.2rem solid var(--overlay-d);
	}

	header, footer {
		padding: 2rem 0;
	}

	@media only screen and (max-width: 1300px) {
		.pane-container {
			grid-template-columns: 15rem 1fr;
			grid-template-rows: repeat(2, auto);
		}
		.pane-container>*:last-child{
			grid-column: 1 / -1;
		}
	}
	@media only screen and (max-width: 700px) {
		.pane-container {
			grid-template-columns: 1fr;
			grid-template-rows: repeat(3, auto);
		}
	}
</style>