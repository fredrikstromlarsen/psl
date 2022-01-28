<script>
    export const optionsObj = [
    {
        "name": "Server",
        "type": "radio",
        "values": [
            "Nginx",
            "Apache",
            "NodeJS",
            "Flask"
        ]
    },
    {
        "name": "Database",
        "type": "radio",
        "values": [
            "MySQL",
            "Postgres",
            "MongoDB",
            "Redis"
        ]
    },
    {
        "name": "Hashing Algorithm",
        "type": "radio",
        "values": [
            "Bcrypt",
            "Argon2"
        ]
    },
    {
        "name": "Authorization Token",
        "type": "radio",
        "values": [
            "JWT",
            "Session"
        ]
    },
    {
        "name": "Extras",
        "type": "checkbox",
        "values": [
            "End-to-end Encryption",
            "2 Factor Authentication"
        ]
    }
];

	function handleInput(e, f) {
		console.log(e, f);
	}
    function getId(a, b) {
        return a.substring(0, 4).toLowerCase() + "-" + b.toLowerCase();
    }
        
</script>
<form method="GET" action="" on:input={ handleInput, this }>
    {#each optionsObj as category}
        <div class="options-category">
            <h2>{category["name"]}</h2>
            {#each category["values"] as option}
                <div class="h">
                    <input type={category["type"]} name={category["name"].toLowerCase()} id={getId(category["name"], option)} value={option}>
                    <label for={getId(category["name"], option)}>{option}</label>
                </div>
            {/each}
        </div>
    {/each}
</form>
<style>
    .options-category {
        display:flex;
        flex-direction: column;
        gap: 1rem;   
    }
	.h {
		display: flex;
		gap: 1rem;
        align-items: center;
	}
    h2 {
        margin: 0;
        font-size: x-large;
    }
    form {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    label, input {
        font-size: 1.2rem;
        margin: 0;
        padding: 0;
    }

</style>