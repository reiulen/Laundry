(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.no_karyawan || client.no_karyawan.indexOf(filter.no_karyawan) > -1)
                    && (!filter.nama_karyawan || client.nama_karyawan.indexOf(filter.nama_karyawan) > -1)
                    && (!filter.username || client.username.indexOf(filter.username) > -1)
                    && (!filter.password || client.password.indexOf(filter.password) > -1)
                    && (!filter.role || client.role.indexOf(filter.role) > -1);
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
            "no_konsumen": "KON001",
            "nama_konsumen": "Andri Udiartomo",
            "alamat": "Komplek Perumahan Bandung",
            "telepon": "0811234567"
        },
        {
            "no_konsumen": "KON002",
            "nama_konsumen": "Kiki Supendi",
            "alamat": "Komplek Perumahan Rajapolah",
            "telepon": "0829234567"
        },
        {
            "no_konsumen": "KON003",
            "nama_konsumen": "Rifki Mubarok",
            "alamat": "Komplek Perumahan Sindang Kasih",
            "telepon": "0823234567"
        },
        {
            "no_konsumen": "KON004",
            "nama_konsumen": "Syauqi Zaidan",
            "alamat": "Komplek Perumahan Cikoneng",
            "telepon": "0813234567"
        },
        {
            "no_konsumen": "KON005",
            "nama_konsumen": "Andri Udiartomo",
            "alamat": "Komplek Perumahan Tasikmalaya",
            "telepon": "08221234567"
        }
    ];
}());