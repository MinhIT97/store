console.log("helo sort");


$(document).ready(function () {
    $(function () {
        const select = document.getElementById("lion-sortby");
        console.log(select);
        const url = window.location.origin + window.location.pathname;

        if (select) {
            select.addEventListener("change", e => {
                e.preventDefault();
                const value = _.split(select.value, "-");
                window.location.href = `${url}?sort_by=${select.value}`;
            });
        }
    });
});
