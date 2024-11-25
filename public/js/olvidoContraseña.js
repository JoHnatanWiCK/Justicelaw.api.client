document.getElementById('recu').addEventListener('click', async () => {
    const email = document.getElementById('email').value;

    const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/password/email', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
        body: JSON.stringify({ email }),
    });

    const data = await response.json();
    alert(data.message);
});