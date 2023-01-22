import axios from 'axios';

    function createNew() {
        window.location.href = '/animal/create';
    }
    window.createNew = createNew;

    axios.get('/api/animal').then((response) => {
        const data = response.data;

        $("#list").dxDataGrid({
            dataSource: data.data,

            columns: [
                { dataField: 'name', caption: 'Name' },
                { dataField: 'date_of_birth', caption: 'Birthday' },
                { dataField: 'weight', caption: 'Weight' },
                { dataField: 'height', caption: 'Height' },

                {
                    dataField: 'friendliness',
                    caption: 'Friendliness',
                    calculateCellValue: function(data) {
                        return data.friendliness === 1 ? 'Friendly' : 'Not Friendly';
                    }
                },

                {
                    type: 'buttons',
                    width: 120,
                    buttons: ['edit', 'delete', {
                        hint: 'Edit',
                        icon: 'edit',
                        onClick(e) {
                            window.location.href = `/animal/edit/${e.row.data.id}`;
                        },
                    }],
                }
            ],

            filterRow: { visible: true },
            searchPanel: { visible: true },

            remoteOperations: true,

            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },

            paging: {
                pageSize: data.per_page,
                enabled: true,
                pageIndex: data.current_page - 1,
                type: "remote",
            },
            
            remoteOperations: {
                sorting: true,
                filtering: true,
                paging: true
            },

            sorting: { mode: "multiple" },
        });
    });