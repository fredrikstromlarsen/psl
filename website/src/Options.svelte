<script>
    const optionsObj = {
        "server": {
            "type": "radio",
            "values": [
                "nginx",
                "apache",
                "nodejs",
                "flask"
            ]
        },
        "database": {
            "type": "radio",
            "values": [
                "mysql",
                "postgres",
                "mongodb",
                "redis"
            ]
        },
        "hashalgo": {
            "type": "radio",
            "values": [
                "bcrypt",
                "argon2"
            ]
        },
        "authtoken": {
            "type": "radio",
            "values": [
                "jwt",
                "session"
            ]
        },
        "extras": {
            "type": "checkbox",
            "values": [
                "e2ee",
                "2fa"
            ]
        }
    }

	function handleInput(e) {
		console.log(e);
	}
	function saveConfiguration(e) {
		console.log(e);
	}
    console.log(optionsObj);
    console.log(optionsObj.length);
</script>
<form method="GET" action="" on:input={ handleInput }>
    {#each optionsObj as optionsList}
        <div>
            <h2>{optionsList}</h2>
            <!-- {#each list as option} -->
                <div class="h">
                    <!-- <input type={option["type"]} name="" id=""> -->
                    <label for="">Hello world</label>
                </div>
            <!-- {/each} -->
        </div>
    {/each}
    <div>
        <h2>Server</h2>
        <div class="h">
            <input type="radio" name="s" value="nginx" id="s-nginx">
            <label for="s-nginx">Nginx</label>
        </div>
        <div class="h">
            <input type="radio" name="s" value="apache" id="s-apache">
            <label for="s-apache">Apache</label>
        </div>
        <div class="h">
            <input type="radio" name="s" value="nodejs" id="s-nodejs">
            <label for="s-nodejs">NodeJS</label>
        </div>
        <div class="h">
            <input type="radio" name="s" value="flask" id="s-flask">
            <label for="s-flask">Python Flask</label>
        </div>
    </div>
    <div>
        <h2>Database</h2>
        <div class="h">
            <input type="radio" name="db" value="mysql" id="db-mysql">
            <label for="db-mysql">MySQL</label>
        </div>
        <div class="h">
            <input type="radio" name="db" value="postgresql" id="db-postgresql">
            <label for="db-postgresql">PostgreSQL</label>
        </div>
        <div class="h">
            <input type="radio" name="db" value="mongodb" id="db-mongodb">
            <label for="db-mongodb">MongoDB</label>
        </div>
        <div class="h">
            <input type="radio" name="db" value="redis" id="db-redis">
            <label for="db-redis">Redis</label>
        </div>
    </div>
    <div>
        <h2>Password Hashing Algorithm</h2>
        <div class="h">
            <input type="radio" name="h" value="bcrypt" id="h-bcrypt">
            <label for="h-bcrypt">Bcrypt (Recommended)</label>
        </div>
        <div class="h">
            <input type="radio" name="h" value="argon2" id="h-argon2">
            <label for="h-argon2">Argon2</label>
        </div>
    </div>
    <div>
        <h2>Authorization Token Type</h2>
        <div class="h">
            <input type="radio" name="at" value="jwt" id="at-jwt">
            <label for="at-jwt">JWT</label>
        </div>
        <div class="h">
            <input type="radio" name="at" value="session" id="at-session">
            <label for="at-session">Session</label>
        </div>
    </div>
    <div>
        <h2>Extra Features</h2>
        <div class="h">
            <input type="checkbox" name="e[]" value="e2ee" id="e-ee2e">
            <label for="e-e2ee">End-to-end Encryption</label>
        </div>
        <div class="h">
            <input type="checkbox" name="e[]" value="2fa" id="e-2fa">
            <label for="e-2fa">2 Factor Authentication</label>
        </div>
    </div>
    <input type="button" value="Save configuration" on:click={saveConfiguration}>
</form>
<style>
	.h {
		display: flex;
		gap: 1rem;
	}

</style>