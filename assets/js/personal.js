$('#selectAll').change(function() {
    var checkboxes = $(this).closest('table').find(':checkbox');
    checkboxes.prop('checked', $(this).is(':checked'));
  });