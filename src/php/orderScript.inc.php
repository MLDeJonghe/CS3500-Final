
<script type="text/javascript">
    function addItem(dishId) {

        var ajaxRequest = new XMLHttpRequest();

        ajaxRequest.open("GET", "process_add_item.php?id=" + dishId, true);
        ajaxRequest.send();

        $("#addItemModal" + dishId).modal('toggle');
        

    }

    function removeItem(key){

        var ajaxRequest = new XMLHttpRequest();

        ajaxRequest.open("GET", "process_remove_item.php?key=" + key, true);
        ajaxRequest.send();

        $("#key").remove;
    }
</script>