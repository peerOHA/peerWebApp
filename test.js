async function registerUser(email, password, username) {
    const query = `
        query Hello {
    hello {
        root
        args
        context
        currentuserid
    }
    `;

    const variables = {};

    try {
        const response = await fetch('https://getpeer.eu/graphql', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                query: query,
                variables: variables
            })
        });

        if (!response.ok) {
            throw new Error(`HTTP Fehler! Status: ${response.status}`);
        }

        const result = await response.json();

        console.log("hello erfolgreich!", result);
    } catch (error) {
        console.error("Ein Fehler ist aufgetreten:", error);
    }
}

document.getElementById('registerForm').addEventListener('submit', async function (event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    // Password validation
    const passwordMinLength = 8;
    const passwordRegex = /^(?=.*[A-Z]).+$/; // At least one uppercase letter

    if (password.length < passwordMinLength) {
        alert("Das Passwort muss mindestens 8 Zeichen lang sein!");
        return;
    }

    if (!passwordRegex.test(password)) {
        alert("Das Passwort muss mindestens einen Großbuchstaben enthalten!");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwörter stimmen nicht überein!");
        return;
    }
    await registerUser(email, password, username);
});
