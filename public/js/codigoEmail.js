document.getElementById('codigoButton').addEventListener('click', async () => {
    const email = document.getElementById('email').value;
    const code = document.getElementById('codigoInput').value;

    const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/password/reset', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, code, password: 'NewPassword123', password_confirmation: 'NewPassword123' }),
    });

    const data = await response.json();
    alert(data.message);
});
