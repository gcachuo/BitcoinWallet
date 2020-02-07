let tableClients, tableCoins, totales;
$(function () {
    tableClients = $("#tabla-clientes").DataTable({
        order: [[2, 'desc']],
        ajax: {
            type: 'POST',
            url: 'api/users/fetchClients',
            dataSrc: ({status, code, response: {message, data: {clients, wallet}}, error}) => {
                totales = {
                    cartera: wallet.total,
                    clientes: 0,
                    monedas: {cartera: wallet.monedas, clientes: {}}
                };
                $.each(clients, function (key, client) {
                    $.each(client.monedas, function (idMoneda, moneda) {
                        const cantidad = (totales.monedas.clientes[idMoneda] || 0) + Number(moneda);
                        totales.monedas.clientes[idMoneda] = Math.round(cantidad * 100000000) / 100000000;
                    });
                    totales.clientes += +client.total;
                });
                return clients;
            },
            data: {
                user: JSON.parse(localStorage.getItem('user'))
            }
        },

        pageLength: 25,
        scrollX: false,
        processing: true,
        serverSide: false,
        responsive: true,
        paginate: false,
        searching: false,
        initComplete,

        language: {
            search: "Buscar:",
            emptyTable: "No hay registros que consultar",
            lengthMenu: "Mostrar _MENU_ registros por pagina",
            info: "Mostrando pagina _PAGE_ de _PAGES_",
            loadingRecords: "...",
            processing: "<i class='fa fa-spin fa-spinner'></i>",
            paginate: {
                first: "Primero",
                last: "Ultimo",
                next: "Siguiente",
                previous: "Anterior"
            },
        },

        columnDefs: (() => {
            const columns = [
                {
                    responsivePriority: 1,
                    title: 'Nombre', data: 'nombre'
                },
                {
                    responsivePriority: 1,
                    title: 'Costo', data: 'costo',
                    render: (data, type) => {
                        if (type === 'display') {
                            return numeral(data).format('$0,0.00');
                        }
                        return data;
                    }
                },
                {
                    responsivePriority: 1,
                    title: 'Total', data: 'total',
                    render: (data, type) => {
                        if (type === 'display') {
                            return numeral(data).format('$0,0.00');
                        }
                        return data;
                    }
                },
            ];
            columns.map((column, index) => {
                column['targets'] = index;
                return column;
            });
            return columns;
        })(),
    });
});

function initComplete() {
    $("#txtTotalCartera").val(numeral(totales.cartera).format('$0,0.00'));
    $("#txtTotalClientes").val(numeral(totales.clientes).format('$0,0.00'));
    $("#txtTotalDiferencia").val(numeral(totales.cartera - totales.clientes).format('$0,0.00'));

    const data = [];
    $.each(totales.monedas.clientes, (moneda, clientes) => {
        const diferencia = Math.round((totales.monedas.cartera[moneda] - clientes) * 100000000) / 100000000;
        const cartera = totales.monedas.cartera[moneda];
        data.push({moneda, cartera, clientes, diferencia});
    });
    tableCoins = $("#tabla-monedas").DataTable({
        data,

        pageLength: 25,
        scrollX: false,
        processing: true,
        serverSide: false,
        responsive: true,
        paginate: false,
        searching: false,

        columnDefs: (() => {
            const columns = [
                {
                    responsivePriority: 1,
                    title: 'Moneda', data: 'moneda',
                    render: (data, type) => {
                        return data.toUpperCase();
                    }
                },
                {
                    responsivePriority: 1,
                    title: 'Cartera', data: 'cartera',
                    render: (data, type) => {
                        if (type === 'display') {
                            return numeral(data).format('0.00000000');
                        }
                        return data;
                    }
                },
                {
                    responsivePriority: 1,
                    title: 'Clientes', data: 'clientes',
                    render: (data, type) => {
                        if (type === 'display') {
                            return numeral(data).format('0.00000000');
                        }
                        return data;
                    }
                },
                {
                    responsivePriority: 1,
                    title: 'Diferencia', data: 'diferencia',
                    render: (data, type) => {
                        if (type === 'display') {
                            return `<span class="text-${data >= 0 ? 'success' : 'danger'}">` + numeral(data).format('0.00000000') + '</span>';
                        }
                        return data;
                    }
                },
            ];
            columns.map((column, index) => {
                column['targets'] = index;
                return column;
            });
            return columns;
        })(),
    });
}
