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
			<!-- 
				Preview selection in OSI-model
			-->
		</div>
		<div class="pane">
			<!-- 
				Preview of all files with a checkmark prechecked on everyone of them. 
				Download button at the bottom.
			-->
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
	}

	:global(body) {
		background-color: var(--bg);
		color: var(--fg);
		min-height: 100vh;
		max-width: 100vw;
		margin: 0 !important;
		padding: 0 !important;
	}
	main {
		min-height: calc(100vh - 4rem);
		max-width: calc(100vw - 4rem);

		padding: 2rem;

		display: flex;
		flex-direction: column;
		gap: 2rem;
	}
	.icon {
		margin: 0 0.6rem;
	}
	.pane-container {
		display: grid;
		grid-template-columns: 20rem minmax(30rem, 1fr) minmax(25rem, 35rem);
		grid-template-rows: 1fr;
		gap: 1rem;
	}
	:global(.pane-container>*){
		border: 0.2rem solid #0002;
		border-radius: 0.25rem;
		background-color: #0002;

		height: 100%;
		min-height: 10rem;;
		width: calc(100% - 4rem);
		padding: 0 2rem;
	}
	

	@media only screen and (max-width: 1300px){
		.pane-container {
			grid-template-columns: 1fr;
			grid-template-rows: repeat(3, auto);
		}
	}
</style>