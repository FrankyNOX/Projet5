// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable(
    {
        "language": {
          "url": "/plugins/i18n/dataTables-french.json"
        }
    }
  );
});


