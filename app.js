const PHPScriptUrl = '/script.php';

fetch(PHPScriptUrl)
    .then(function (response) {
        return response.text();
    })
    .then(function (body) {
        document.getElementById('aboutDeals').innerHTML += body;
    });

function createEntityPHP() {
    const createUrl = '/createNewRandomEntity.php';

    fetch(createUrl)
        .then(function (response) {
            return response.text();
        })
        .then(function (body) {
            console.log("created");
        });
}