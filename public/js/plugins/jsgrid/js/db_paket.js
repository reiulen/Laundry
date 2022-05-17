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
            "no_paket": "CSR3",
            "nama_paket": "Cuci Setrika",
            "jenis_paket": "Regular",
            "jmlhari": "3",
            "harga": "50000",
            "satuan": "Kg"
        },
        {
            "no_paket": "CSR2",
            "nama_paket": "Cuci Setrika",
            "jenis_paket": "Regular",
            "jmlhari": "2",
            "harga": "60000",
            "satuan": "Kg"
        },
        {
            "no_paket": "CSE1",
            "nama_paket": "Cuci Setrika",
            "jenis_paket": "Express",
            "jmlhari": "1",
            "harga": "75000",
            "satuan": "Kg"
        },
        {
            "no_paket": "CSE0",
            "nama_paket": "Cuci Setrika",
            "jenis_paket": "Express 6 Jam",
            "jmlhari": "0",
            "harga": "90000",
            "satuan": "Kg"
        },
        {
            "no_paket": "CKR3",
            "nama_paket": "Cuci Kering",
            "jenis_paket": "Regular",
            "jmlhari": "3",
            "harga": "40000",
            "satuan": "Kg"
        },
        {
            "no_paket": "CKR2",
            "nama_paket": "Cuci Kering",
            "jenis_paket": "Regular",
            "jmlhari": "2",
            "harga": "50000",
            "satuan": "Kg"
        },
        {
            "no_paket": "CKE1",
            "nama_paket": "Cuci Kering",
            "jenis_paket": "Express",
            "jmlhari": "1",
            "harga": "60000",
            "satuan": "Kg"
        },
        {
            "no_paket": "CKE0",
            "nama_paket": "Cuci Kering",
            "jenis_paket": "Express 6 Jam",
            "jmlhari": "0",
            "harga": "70000",
            "satuan": "Kg"
        },
        {
            "no_paket": "STR3",
            "nama_paket": "Setrika",
            "jenis_paket": "Regular",
            "jmlhari": "3",
            "harga": "30000",
            "satuan": "Kg"
        },
        {
            "no_paket": "STR2",
            "nama_paket": "Setrika",
            "jenis_paket": "Regular",
            "jmlhari": "2",
            "harga": "40000",
            "satuan": "Kg"
        },
        {
            "no_paket": "STE1",
            "nama_paket": "Setrika",
            "jenis_paket": "Express",
            "jmlhari": "1",
            "harga": "50000",
            "satuan": "Kg"
        },
        {
            "no_paket": "STE0",
            "nama_paket": "Setrika",
            "jenis_paket": "Express 6 Jam",
            "jmlhari": "0",
            "harga": "60000",
            "satuan": "Kg"
        },
        {
            "no_paket": "BED1",
            "nama_paket": "Bed Cover",
            "jenis_paket": "Single",
            "jmlhari": "1",
            "harga": "70000",
            "satuan": "Buah"
        },
        {
            "no_paket": "BED2",
            "nama_paket": "Bed Cover",
            "jenis_paket": "Queen",
            "jmlhari": "1",
            "harga": "80000",
            "satuan": "Buah"
        },
        {
            "no_paket": "BED3",
            "nama_paket": "Bed Cover",
            "jenis_paket": "King",
            "jmlhari": "1",
            "harga": "90000",
            "satuan": "Buah"
        },
        {
            "no_paket": "SPR1",
            "nama_paket": "Sperai",
            "jenis_paket": "Set Single",
            "jmlhari": "1",
            "harga": "75000",
            "satuan": "Buah"
        },
        {
            "no_paket": "SPR2",
            "nama_paket": "Sperai",
            "jenis_paket": "Set Queen",
            "jmlhari": "1",
            "harga": "85000",
            "satuan": "Buah"
        },
        {
            "no_paket": "SPR3",
            "nama_paket": "Sperai",
            "jenis_paket": "Set King",
            "jmlhari": "1",
            "harga": "95000",
            "satuan": "Buah"
        },
        {
            "no_paket": "KAR1",
            "nama_paket": "Karpet",
            "jenis_paket": "Tipis",
            "jmlhari": "1",
            "harga": "15000",
            "satuan": "Meter"
        },
        {
            "no_paket": "KAR2",
            "nama_paket": "Karpet",
            "jenis_paket": "Sedang",
            "jmlhari": "1",
            "harga": "25000",
            "satuan": "Meter"
        },
        {
            "no_paket": "KAR3",
            "nama_paket": "Karpet",
            "jenis_paket": "Tebal",
            "jmlhari": "1",
            "harga": "35000",
            "satuan": "Meter"
        },
        {
            "no_paket": "BON1",
            "nama_paket": "Boneka",
            "jenis_paket": "Kecil",
            "jmlhari": "1",
            "harga": "10000",
            "satuan": "Buah"
        },
        {
            "no_paket": "BON2",
            "nama_paket": "Boneka",
            "jenis_paket": "Sedang",
            "jmlhari": "1",
            "harga": "15000",
            "satuan": "Buah"
        },
        {
            "no_paket": "BON3",
            "nama_paket": "Boneka",
            "jenis_paket": "Besar",
            "jmlhari": "1",
            "harga": "20000",
            "satuan": "Buah"
        },
        {
            "no_paket": "GOR1",
            "nama_paket": "Gordyn",
            "jenis_paket": "Tipis",
            "jmlhari": "1",
            "harga": "35000",
            "satuan": "Meter"
        },
        {
            "no_paket": "GOR2",
            "nama_paket": "Gordyn",
            "jenis_paket": "Tebal",
            "jmlhari": "1",
            "harga": "45000",
            "satuan": "Meter"
        },
        {
            "no_paket": "SEL1",
            "nama_paket": "Selimut",
            "jenis_paket": "Tipis",
            "jmlhari": "1",
            "harga": "30000",
            "satuan": "Buah"
        },
        {
            "no_paket": "SEL2",
            "nama_paket": "Selimut",
            "jenis_paket": "Tebal",
            "jmlhari": "1",
            "harga": "35000",
            "satuan": "Buah"
        }
    ];
}());