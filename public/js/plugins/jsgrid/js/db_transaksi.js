(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.no_order || client.no_order.indexOf(filter.no_order) > -1)
                    && (!filter.nama_konsumen || client.nama_konsumen.indexOf(filter.nama_konsumen) > -1)
                    && (!filter.paket || client.paket.indexOf(filter.paket) > -1)
                    && (!filter.waktu || client.waktu === filter.waktu)
                    && (!filter.tgl_selesai || client.tgl_selesai.indexOf(filter.tgl_selesai) > -1)
                    && (!filter.status_bayar || client.status_bayar.indexOf(filter.status_bayar) > -1)
                    && (!filter.status_order || client.status_order === filter.status_order);
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

    db.statusorder = [
        { Name: "", Id: 0 },
        { Name: "Baru", Id: 1 },
        { Name: "Proses", Id: 2 },
        { Name: "Selesai", Id: 3 },
        { Name: "Diambil", Id: 4 },
        { Name: "Batal", Id: 5 },
    ];

    db.clients = [
        {
            "no_order": "TRK202105001",
            "nama_konsumen": "Andri Udiartomo",
            "paket": "Cuci Setrika Regular",
            "waktu": "3",
            "tgl_selesai": "2021/05/01",
            "status_bayar": "Lunas",
            "status_order": 1
        },
        {
            "no_order": "TRK202105002",
            "nama_konsumen": "Kiki Supendi",
            "paket": "Cuci Kering Regular",
            "waktu": "3",
            "tgl_selesai": "2021/05/01",
            "status_bayar": "Lunas",
            "status_order": 1
        },
        {
            "no_order": "TRK202105003",
            "nama_konsumen": "Rifki Mubarok",
            "paket": "Cuci Setrika Express",
            "waktu": "1",
            "tgl_selesai": "2021/05/01",
            "status_bayar": "Lunas",
            "status_order": 2
        },
        {
            "no_order": "TRK202105004",
            "nama_konsumen": "Lutfi Farhan",
            "paket": "Cuci Kering Express",
            "waktu": "1",
            "tgl_selesai": "2021/05/01",
            "status_bayar": "Belum Lunas",
            "status_order": 3
        },
        {
            "no_order": "TRK202105005",
            "nama_konsumen": "Doni",
            "paket": "CSprei Tipis",
            "waktu": "1",
            "tgl_selesai": "2021/05/01",
            "status_bayar": "Belum Lunas",
            "status_order": 4
        }
    ];
}());