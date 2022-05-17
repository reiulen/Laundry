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
            "no_karyawan": "KRY001",
            "nama_karyawan": "Andri Udiartomo",
            "username": "andri_udiartomo",
            "password": "au2021",
            "role": "Karyawan"
        },
        {
            "no_karyawan": "KRY002",
            "nama_karyawan": "Kiki Supendi",
            "username": "kiki_supendi",
            "password": "ksd2021",
            "role": "Karyawan"
        },
        {
            "no_karyawan": "KRY003",
            "nama_karyawan": "Rifki Mubarok",
            "username": "r_mubarok",
            "password": "rfk01",
            "role": "Karyawan"
        },
        {
            "no_karyawan": "KRY004",
            "nama_karyawan": "SUpryanto",
            "username": "yanto01",
            "password": "yanto001",
            "role": "Karyawan"
        },
        {
            "no_karyawan": "KRY005",
            "nama_karyawan": "Syauqi Zaidan",
            "username": "syauqi_z",
            "password": "sqz",
            "role": "Karyawan"
        }
    ];
}());