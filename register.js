async function registerUser(email, password, username, biography, isPrivate = null, img = null) {
    const query = `
        mutation Register($input: RegisterInput!) {
            register(input: $input) {
                status
                errorMessage
                userid
            }
        }
    `;

    const variables = {
        input: {
            email: email,
            password: password,
            username: username,
            biography: biography,
            isprivate: isPrivate,
            img: img
        }
    };

    try {
        const response = await fetch('https://getpeer.eu/graphql', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer your-auth-token` // falls notwendig
            },
            body: JSON.stringify({
                query: query,
                variables: variables
            })
        });

        const result = await response.json();

        if (result.data.register.status === "success") {
            console.log("Registrierung erfolgreich! Benutzer-ID:", result.data.register.userid);
        } else {
            console.error("Fehler bei der Registrierung:", result.data.register.errorMessage);
        }
    } catch (error) {
        console.error("Ein Fehler ist aufgetreten:", error);
    }
}

// Beispiel für die Verwendung der Funktion
registerUser(
    "test@nix.de",
    "12345678O",
    "testman",
    "huhu"
);
