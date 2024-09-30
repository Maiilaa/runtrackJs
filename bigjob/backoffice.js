$(document).ready(function () {
    const requests = [
        { email: 'user1@laplateforme.io', date: '2024-09-25', status: 'pending' }
    ];

    function loadRequests() {
        let tableContent = '';
        requests.forEach(function (request) {
            tableContent += `<tr>
                <td>${request.email}</td>
                <td>${request.date}</td>
                <td>
                    <button class="btn btn-success accept-btn">Accepter</button>
                    <button class="btn btn-danger reject-btn">Refuser</button>
                </td>
            </tr>`;
        });
        $('#requestsTable').html(tableContent);
    }

    loadRequests();

    $(document).on('click', '.accept-btn', function () {
        alert('Demande acceptée.');
    });

    $(document).on('click', '.reject-btn', function () {
        alert('Demande refusée.');
    });
});
