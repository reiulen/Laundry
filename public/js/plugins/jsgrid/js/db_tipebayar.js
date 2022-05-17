(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.status_order || client.status_order.indexOf(filter.status_order) > -1);
            });
        },

        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },

        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }

    };

    window.db = db;

    db.clients = [
        {
            "tipe_bayar": "Cash"
        },
        {
            "tipe_bayar": "GoPay"
        },
        {
            "tipe_bayar": "Transfer"
        },
        {
            "tipe_bayar": "Cash On Deliver"
        },
        {
            "tipe_bayar": "Dana"
        }
     ];

}());