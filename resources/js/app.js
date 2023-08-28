require('./bootstrap');
//https://mapacultural.secult.ce.gov.br
$(document).ready(function () {
   $.get("http://localhost:8080//api/opportunity/find/?&registrationFrom=LTE(2023-08-28%2013:46)&registrationTo=GTE(2023-08-28%2013:46)&@order=createTimestamp%20DESC&@select=id,singleUrl,name,subTitle,type,shortDescription,terms,project.name,project.singleUrl,%20user,%20owner.userId&@files=(avatar.avatarMedium):url&@page=1&@limit=10",
    function (data, textStatus, jqXHR) {
        console.log({data})
    }
   );
});