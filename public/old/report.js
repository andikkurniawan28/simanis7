document.head.appendChild(
    el('style').html(`
        .paginate_button {
            padding: 0 !important;
            background: transparent !important;
            outline: none !important;
            border: 1px solid #ddd !important;
            border-radius: 8px !important;
        }

        .paginate_button .page-item:hover {
            outline: none !important;
            border-radius: 8 px;
            border: 1px solid #ddd !important;
        }

        .page-item a {
            padiing: 0 !important;
            font-size: 12 px;
            margin: 0 !important;
        }

        .page-item {
            padding: 10px;
        }

    `).get()
);


class tablePDF{

        #data = {
            pageSize: 'A4',
            pageOrientation: 'landscape',
            content: [],
            pageMargins: [ 10, 10, 10, 10 ],
            styles: {}
        } 

        #tablebaru = null;

        pageOrientation(orientation = 'landscape'){
             this.#data.pageOrientation = orientation;
             return this;
        }

        paperSize(paper = 'A4'){
             this.#data.pageSize = paper;
             return this;
        }

        tableRowWidth(...args){
            this.#tablebaru.widths = args;
            return this 
        }

        text(par = {
            text: 'paragraph'
        }){
            this.#data.content.push(par);
            return this;
        }

        addCols(arr = 
            [ { text: 'Bold value', style: [ 'examp' ]  }, { text: 'Bold value', style: [ 'examp' ]  }, { text: 'Bold value', style: [ 'examp' ]  }]
        ){
            this.#tablebaru.body.push(arr)
        }

        addtable(layout = 0){

            var lay = ['lightHorizontalLines', 'headerLineOnly','noBorders'];

            var dattbl = this.#tablebaru;
            var tbl = {
                layout: lay[layout],
                table:  dattbl
            }
            this.#data.content.push(tbl);
            return this;
        }

        table(head = 1){
            this.#tablebaru = {
                headerRows: head,
                body: []
            }
            return this;
        }

        style(name = 'examp', styles = {
            fontSize: 12,
            bold: true
        }){
            this.#data.styles[name] = styles;
            return this;
        }

        run(){
            var win = window.open('', '_blank');
            var obj = this.#data;
            console.log(obj)
            pdfMake.createPdf(obj).open({}, win);
        }

    }

class DatatableReport {

    constructor(table = '') {
        // setup prototype for string
        String.prototype.replaceAll = function (find, replace) {
            var str = this;
            return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
        };
        // setup data content
        this.data = {
            limit: 10,
            id: "app",
            view: [],
            header: [],
            paginLength: 5,
            lengthPage: 0,
            table: table,
            paginationStart: 0,
            pageActive: 0,
            qr: null,
            search: '',
            setting: [],
            filter: []
        }

        // # - info
        console.log(
            "# DatatableReport || info library \n to start library set html with id for load table action \n <table class=\"table\" id=\"app\"></table> \n \n" +
            " #this library need db library \n" +
            " #this library need db jquery \n" +
            " #this library need db jquery datatable \n" +
            "  var tableReport = new DatatableReport(); \n" +
            "  tableReport.setId('app') \n" +
            "  tableReport.qr(' query data ') \n" +
            "  tableReport.run((app) => { \n" +
            "   app.info(); // get information of plugin \n" +
            "  }) \n" 
        )
    }

    delay(callback, ms) {
        var timer = 0;
        return function () {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    setId(a = "app") {
        this.data.id = a;
        return this;

        // # - call glball
    }

    qr(a) {
        this.data.qr = a;
        return this;

        // # - call glball
    }

    info(func) {

        var tableStruktur = {}

        if (this.data.data.length > 0) {
            var n = Object.keys(this.data.data[0]);
            tableStruktur.rowname = n;
            tableStruktur.totalrow = this.data.data.length;
            tableStruktur.rowdata = this.data.data;
        } else {
            document.getElementById(this.data.id).style.width = '100%';
            document.getElementById(this.data.id).innerHTML = `
          <tr>
            <td class="text-center">
                  <i><p>Data tidak tersedia.</p></i>
            </td>
          </tr>
          `;
            Throw.error();
        }

        var info = {
            tableStruktur: tableStruktur,
            data: this.data,
            query: function () {
                console.log(this.data.qr)
            }
        }

        if (func != undefined) {
            func(info)
        }

        this.data.info = info;

        console.log('#info table structure')

        console.log("# EXPORT SETTING \n set table row to show \n" +
            " app.setRow({ \n" +
            "     rowname: 'view name' \n" +
            " }) \n \n ## ----- USE ARRAY -----// \n \n" +
            " app.setRow([ \n" +
            "     # text \n" +
            "     {title: 'title', type: 'number', content: 'rowname'} \n" +
            "     # math \n" +
            "     { title: 'Awal', type: 'math', content: '{awal}-{rawal}+{dnawal}-{ttawal}+{sla}+{slra}-{ptga}+{dca}-{tca}', key: ['awal', 'rawal', 'dnawal', 'ttawal', 'sla', 'slra', 'ptga', 'dca', 'tca'] }, \n" +
            "     # add parameter width if you want set width row of pdf export \n" +
            " ]) \n" +
            "\n\n" +
            "# report title setting \n" +
            " app.reportTitle('title'); \n" +
            "# PDF orientation \n" +
            " app.PDForientation('potrait'); // landscape || potrait \n" +
            "# PDF paper \n" +
            " app.PDFpaper('A4'); // A4 || LEGAL || A5 dll.. \n" +
            "# PDF export setting for number \n" +
            " app.ExcelNumberStart(2) \n" +
            " app.ExcelNumberSum(['D', 'E', 'F', 'G', 'H', 'I', 'J']) \n" +
            "# run table \n" +
            " app.tableDeploy(); \n"
        )

        // # - call glball
        return this;
    }

    reportTitle(title) {
        this.data.title = title;
        // # - call glball
        return this;
    }

    PDForientation(orientation = "potrait") {
        this.data.orientation = orientation;
        // # - call glball
        return this;
    }
    
    Order(o = true) {
        this.data.ordering = o;
        // # - call glball
        return this;
    }

    Search(o = true) {
        this.data.searching = o;
        // # - call glball
        return this;
    }

    PDFpaper(paper = "A4") {
        this.data.paper = paper;
        // # - call glball
        return this;
    }

    ExcelNumberStart(num = 2) {
        this.data.dataNumberExcelStart = num;
    }
    /*
      this.data.dataNumberExcelStart
      this.data.ExcelNumberSum
    */
    ExcelNumberSum(arr = []) {
        this.data.ExcelNumberSum = arr;
    }

    setRow(obj) {

        if (Array.isArray(obj) == true) {
            this.data.custView = obj;
        } else {
            this.data.showR = Object.keys(obj)
            this.data.showV = Object.keys(obj).map((s) => {
                return obj[s];
            })
        }
        // # - call glball
        return this;
    }

    formatRupiah(angka, prefix) {
        var topHead = "";
        if (angka.toString()[0] == "-") {
            topHead = "-";
        }
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            var separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }
        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        rupiah = topHead + rupiah;
        return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
    }

    tanggal(a) {
        var newDate = new Date();
        if (a != undefined) {
            if (a === "gugus") {
                newDate = new Date(helper.sesiGet('tahun') + '-' + helper.sesiGet('bulan'));
            } else {
                newDate = new Date(a);
            }
        }

        var namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        var namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu'];

        function buat(newDate) {
            var year = newDate.getFullYear();
            var month = (newDate.getMonth() + 1) + '';
            var day = (newDate.getDate()) + '';
            var format = '00';
            var ansMonth = format.substring(0, format.length - month.length) + month;
            var ansDay = format.substring(0, format.length - day.length) + day;
            var dayKnow = ansDay + '-' + ansMonth + '-' + year;
            if (a == null) {
                return "";
            } else {
                return dayKnow;
            }
        }

        function buatN(newDate) {
            var year = newDate.getFullYear();
            var month = newDate.getMonth();
            var day = (newDate.getDate()) + '';
            var format = '00';
            var ansMonth = namaBulan[month];
            var ansDay = format.substring(0, format.length - day.length) + day;
            var dayKnow = ansDay + ' ' + ansMonth + ' ' + year;
            if (a == null) {
                return "";
            } else {
                return dayKnow;
            }
        }

        function buatO(newDate) {
            var year = newDate.getFullYear();
            var month = (newDate.getMonth() + 1) + '';
            var day = (newDate.getDate()) + '';
            var format = '00';
            var ansMonth = format.substring(0, format.length - month.length) + month;
            var ansDay = format.substring(0, format.length - day.length) + day;
            var dayKnow = year + '-' + ansMonth + '-' + ansDay;
            return {
                full: dayKnow,
                day: newDate.getDay()
            };
        }

        function buatNum(newDate) {
            var year = newDate.getFullYear();
            var month = (newDate.getMonth() + 1) + '';
            var day = (newDate.getDate()) + '';
            var format = '00';
            var ansMonth = format.substring(0, format.length - month.length) + month;
            var ansDay = format.substring(0, format.length - day.length) + day;
            var dayKnow = year + ansMonth + ansDay;
            return Number(dayKnow);
        }

        function buatC(newDate) {
            var year = newDate.getFullYear();
            var month = newDate.getMonth();
            var day = newDate.getDate();
            var dateK = new Date(year, month, day);
            return dateK;
        }
        var date = new Date(),
            y = date.getFullYear(),
            m = date.getMonth();
        var firstDay = new Date(newDate.getFullYear(), newDate.getMonth(), 1);
        var lastDay = new Date(newDate.getFullYear(), newDate.getMonth() + 1, 0)
        var returnData = {
            oneDayMilisecond: 86400000,
            milisecond: newDate.getTime(),
            normal: buatO(newDate).full,
            cek1: buatC(newDate),
            sekarang: buat(newDate),
            sekarang2: buatN(newDate),
            cek2: buatC(firstDay),
            normal2: buatO(firstDay).full,
            awal: buat(firstDay),
            awal2: buatN(firstDay),
            akhir: buat(lastDay),
            akhir2: buatN(lastDay),
            cek3: buatC(lastDay),
            normal3: buatO(lastDay).full,
            angka: buatNum(newDate),
            dayn: namaHari[buatO(newDate).day],
            day: buatO(newDate).day,
            day2n: namaHari[buatO(firstDay).day],
            day2: buatO(firstDay).day,
            day3n: namaHari[buatO(lastDay).day],
            day3: buatO(lastDay).day
        }
        return returnData;
    }

    tableDeploy() {
        var thisClass = this;
        var idTable = this.data.id;
        var dataInfo = this.data.info;
        var data = this.data;
        var rowName = this.data.showR;
        var rowView = this.data.showV;
        var columnsStructure = [];
        var dataReadForShow = [];
        console.log(data)
        if (rowName != undefined) {
            columnsStructure = rowName.map((row, i) => {
                var objR = {};
                objR['title'] = rowView[i];
                return objR;
            })

            // data row

            dataReadForShow = dataInfo.tableStruktur.rowdata.map((dataRow) => {
                var dataRead = [];
                for (var rN of rowName) {
                    dataRead.push(dataRow[rN])
                }
                return dataRead;
            })
        }


        if (this.data.custView != undefined) {
            columnsStructure = this.data.custView.map((rowSetting) => {
                return {
                    title: rowSetting.title
                }
            })

            var custV = this.data.custView;

            this.data.typeSaldo = {};

            dataReadForShow = data.data.map((dataRow, i) => {
                var y = [];
                for (var cV of custV) {
                    // tipe text
                    if (cV.type == 'text') {
                        y.push(dataRow[cV.content])
                    }

                    if (cV.type == 'date') {
                        y.push(thisClass.tanggal(dataRow[cV.content]).sekarang2)
                    }

                    if (cV.type == 'number') {
                        y.push(thisClass.formatRupiah(Number(dataRow[cV.content]).toFixed(2).replace(/\./g, ',')))
                    }

                    if (cV.type == 'saldo') {
                        if (this.data.typeSaldo[cV.content] == undefined) {
                            this.data.typeSaldo[cV.content] = 0;
                        }
                        this.data.typeSaldo[cV.content] += Number(dataRow[cV.content]);
                        y.push(thisClass.formatRupiah(this.data.typeSaldo[cV.content].toFixed(2).replace(/\./g, ',')))
                    }

                    if (cV.type == 'math') {
                        var dataContent = {};
                        var actContent = cV.content;
                        // cek number
                        for (var getKey of cV.key) {
                            dataContent[getKey] = Number(dataRow[getKey]);
                            actContent = actContent.replaceAll(`{${getKey}}`, 'dataContent.' + getKey)
                        }
                        eval(`
                        var numberOfDeal = (${actContent}).toFixed(2);
                        numberOfDeal = numberOfDeal.replaceAll('.', ',')
                        numberOfDeal = thisClass.formatRupiah(numberOfDeal);

                            y.push(
                                numberOfDeal
                            );
                        `);
                    }

                }
                return y;
            })

        }
        
        var tableOption = {
            data: dataReadForShow,
            columns: columnsStructure
        }

        // add button export
        tableOption['dom'] = 'Bfrtip';

        tableOption['lengthMenu'] = [
            [10, 25, 50, -1],
            ['10 rows', '25 rows', '50 rows', 'Show all']
        ];

        // button action
        tableOption['buttons'] = [];

        // pagelength
        tableOption['buttons'].push('pageLength');

        var rotate = 'landscape';
        if (data.orientation != undefined) {
            rotate = data.orientation;
        }

        var paper = 'A4';
        if (data.paper != undefined) {
            paper = data.paper;
        }

        var xtitle = 'Title Report';
        if (data.title != undefined) {
            xtitle = data.title;
        }

        // pdf export
        var pdfExportConf = {
            extend: 'pdfHtml5',
            text: 'PDF',
            download: 'open',
            orientation: rotate,
            pageSize: paper,
            title: xtitle,
            customize: function (doc) {

                var sumdata = [];
                // get data and set data to number if type number if custome view not undefined
                var dat = doc.content[1].table.body.filter((a, i) => {
                    if (i > 0) {
                        return a;
                    }
                }).map(function (dat) {
                    var nD = dat;
                    if (data.custView != undefined) {
                        var sd = {};
                        data.custView.forEach(function (d, i) {
                            if (d.type == 'math' || d.type == 'number') {
                                nD[i].text = Number(nD[i].text.replace(/\./g, '').replace(/\,/g, '.'))
                            } else if (d.type == 'saldo') {
                                if (sd[i] == undefined) {
                                    sd[i] = 0;
                                }
                                sd[i] += Number(nD[i].text.replace(/\./g, '').replace(/\,/g, '.'))
                                nD[i].text = sd[i];
                            }
                        })

                    }
                    return nD;
                });

                // counting data numberOfDeal
                if (data.custView != undefined) {
                    var numberOfData = 0;
                    for (var rowD of data.custView) {
                        var dataRfromPdf = {};
                        if (rowD.type == 'number' || rowD.type == 'math') {
                            var total = dat.map(function (d, i) {
                                return d[numberOfData].text;
                            }).reduce(function (previousValue, currentValue) {
                                return previousValue + currentValue;
                            });
                            sumdata.push({
                                text: total
                            })
                        } else if (rowD.type == 'saldo') {
                            var total = dat.map(function (d, i) {
                                return d[numberOfData].text;
                            })[dat.length - 1];
                            sumdata.push({
                                text: total
                            })
                        } else {
                            sumdata.push({
                                text: ''
                            })
                        }
                        numberOfData++;
                    }
                }

                // add new row to last line of table

                if (sumdata.length > 0) {
                    var newRowPdfSum = [];
                    sumdata.forEach((item, i) => {
                        newRowPdfSum.push({
                            "text": item.text,
                            "style": "tableFooter"
                        })
                    });
                    doc.content[1]
                        .table
                        .body
                        .push(newRowPdfSum)
                }

                // style table of number format
                var styleTable = doc.content[1].table.body.filter((a, i) => {
                    if (i > 0) {
                        return a;
                    }
                })

                // table style
                console.log(doc)

                doc.styles.tableBodyEven = {
                    fontSize: 8
                }

                doc.styles.tableBodyOdd = {
                    fillColor: "#f3f3f3",
                    fontSize: 8
                }

                doc.styles.tableBodyEvenNum = {
                    fontSize: 8,
                    alignment: "right"
                }

                doc.styles.tableBodyOddNum = {
                    fillColor: "#f3f3f3",
                    fontSize: 8,
                    alignment: "right"
                }

                doc.styles.tableFooter = {
                    bold: true,
                    alignment: "right",
                    color: "white",
                    fillColor: "#2d4154",
                    fontSize: 8
                }

                doc.styles.tableHeader = {
                    alignment: "center",
                    bold: true,
                    color: "white",
                    fillColor: "#2d4154",
                    fontSize: 11
                }

                // number format
                if (data.custView != undefined) {
                    var numberOfData = 0;
                    for (var rowD of data.custView) {
                        if (rowD.type == 'number' || rowD.type == 'math' || rowD.type == 'saldo') {
                            styleTable.forEach((format, xI) => {
                                doc.content[1].table.body[xI + 1][numberOfData].text = thisClass.formatRupiah(Number(format[numberOfData].text).toFixed(2).replace(/\./g, ','))
                                if (doc.content[1].table.body[xI + 1][numberOfData].style == 'tableBodyOdd') {
                                    doc.content[1].table.body[xI + 1][numberOfData].style = 'tableBodyOddNum'
                                }
                                if (doc.content[1].table.body[xI + 1][numberOfData].style == 'tableBodyEven') {
                                    doc.content[1].table.body[xI + 1][numberOfData].style = 'tableBodyEvenNum'
                                }
                            })
                        }
                        numberOfData++;
                    }
                }

            }
        }

        tableOption['buttons'].push({
            text: 'PDF',
            action: function ( e, dt, node, config ) {
                var s = data;
                var dat = s.data;

                var newPdf = new tablePDF();

                console.log(s)
                console.log('--orientation--')

                newPdf.pageOrientation(s.orientation);
    
                var table1 = newPdf.table(1)

                var setW = [];

                s.custView.map(function(wq){
                    setW.push(wq.width)
                })

                table1.tableRowWidth(...setW)
                
                table1.text({
                    text:s.title, alignment: 'center', lineHeight: 1.3
                });

                var headtable = [];

                var datRVal = {};

                s.custView.map(function(wq){
                    headtable.push({text: wq.title, style: ['examp', 'head']})
                })

                s.custView.map(function(wq){
                    datRVal[wq.title] = [];
                })
                
                table1.addCols( headtable )

                var saldo = {}

                dat.forEach(function(ds){
                    var rowDat = [];
                    s.custView.forEach(function(nm){
                        var ct = nm.title;
                        var c = nm.content;
                        var t = nm.type;
                        if(t == 'number'){
                            var v = ds[c].number(2).currency()
                            datRVal[ct].push(ds[c].number(2))
                            rowDat.push({
                                text: v,
                                style: ['number']
                            })
                        }else if(t == 'saldo'){
                            var v = ds[c].number(2)
                            if(saldo[c] == undefined){
                                saldo[c] = v;
                            }else{
                                saldo[c] += v;
                            }
                            datRVal[ct].push(ds[c].number(2))
                            rowDat.push({
                                text: saldo[c].currency(),
                                style: ['number']
                            })
                        }else if(t == 'date'){
                            var v = ds[c];
                            datRVal[ct].push(tanggal(v).sekarang)
                            rowDat.push({
                                text: tanggal(v).sekarang,
                                style: ['text']
                            })
                        }else if(t == 'math'){
                            var mt = c;
                            nm.key.forEach(function(o){
                                mt = mt.replaceAll(`{${o}}`, ds[o])
                            })
                            eval(`
                                datRVal[ct].push((${mt}))
                                rowDat.push({
                                    text: (${mt}).currency(),
                                    style: ['number']
                                })
                            `);
                        }else{
                            var v = ds[c];
                            datRVal[ct].push(v);
                            rowDat.push({
                                text: v,
                                style: ['text']
                            })
                        }
                    })
                    table1.addCols( rowDat )
                })

                var footertable = [];

                globalThis.datRVal = datRVal;

                s.custView.map(function(wq){
                    if(wq.footer === false){
                        footertable.push({text:'', style: ['examp', 'head']})
                    }else if(wq.footer == 'sum'){
                        footertable.push({text: datRVal[wq.title].sum().currency(), style: ['examp', 'right', 'head']})
                    }else{
                        footertable.push({text: wq.footer, style: ['examp', 'head']})
                    }
                })
                
                table1.addCols( footertable )

                table1.addtable()
                
                newPdf.style('examp', {
                    fontSize: 8
                });
                
                newPdf.style('head', {
                    fillColor: "#2d4154",
                    color: 'white',
                });

                newPdf.style('title', {
                    fontSize: 7,
                    alignment: 'center',
                });

                newPdf.style('tgl', {
                    fontSize: 7,
                    alignment: 'center',
                });

                newPdf.style('date', {
                    fontSize: 7,
                    alignment: 'center',
                });

                newPdf.style('number', {
                    fontSize: 7,
                    alignment: 'right',
                });

                newPdf.style('right', {
                    alignment: 'right',
                });

                newPdf.style('text', {
                    fontSize: 7,
                    alignment: 'left',
                });
                newPdf.run();
            }
        });

        var excelExportConf = {
            extend: 'excelHtml5',
            filename: 'datatable',
            customize: function (xlsx) {


                var sheet = xlsx.xl.worksheets['sheet1.xml'];

                globalThis.renderXls = sheet;

                globalThis.workSheet = renderXls.documentElement.querySelectorAll('sheetData row');

                /*
                  thisClass.data.dataNumberExcelStart
                  thisClass.data.ExcelNumberSum
                */

                var datSum = {}
                if (thisClass.data.ExcelNumberSum != undefined) {
                    thisClass.data.ExcelNumberSum.forEach((cc, i) => {
                        datSum[cc] = 0;
                    });

                }

                if (thisClass.data.dataNumberExcelStart != undefined) {

                    Array.from(globalThis.workSheet).forEach((item, i) => {
                        if (i > thisClass.data.dataNumberExcelStart) {
                            thisClass.data.ExcelNumberSum.forEach((abc) => {
                                var g = item.querySelector('c[r=' + abc + (i + 1) + ']')
                                if (g.querySelector('v') != null) {
                                    datSum[abc] += Number(g.querySelector('v').innerHTML)
                                } else {
                                    datSum[abc] += Number(g.querySelector('t').innerHTML.replace(/\./g, '').replace(/\,/g, '.'));
                                }
                            })
                        }
                    });
                }

                if (thisClass.data.ExcelNumberSum != undefined) {
                    console.log(datSum);

                    function toNumber(r) {
                        return thisClass.formatRupiah(r.toFixed(2).replace(/\./g, ','))
                    }

                    function addTotal(newline, index, data) {
                        var textAbc = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
                        var abc = textAbc.toUpperCase().split(',');
                        var posisitext = abc[(Number(abc.indexOf(index[0])) - 1)];
                        var msg = '<row r="' + newline + '">';

                        msg += '<c t="inlineStr" r="' + posisitext + newline + '" s="152">';
                        msg += '<is>';
                        msg += '<t>Total</t>';
                        msg += '</is>';
                        msg += '</c>';

                        for (var i = 0; i < index.length; i++) {
                            msg += '<c t="inlineStr" r="' + index[i] + newline + '" s="152">';
                            msg += '<is>';
                            msg += '<t>' + toNumber(data[index[i]]) + '</t>';
                            msg += '</is>';
                            msg += '</c>';
                        }
                        msg += '</row>';
                        return msg;
                    }

                    var newLIne = addTotal(Number(workSheet[workSheet.length - 1].getAttribute('r')) + 1, thisClass.data.ExcelNumberSum, datSum)
                    console.log(newLIne);
                    sheet.childNodes[0].childNodes[1].innerHTML = newLIne + sheet.childNodes[0].childNodes[1].innerHTML

                }

            }
        }


        tableOption['buttons'].push(excelExportConf);

        if(data.ordering != undefined){
            tableOption['ordering'] = data.ordering;
        }

        if(data.searching != undefined){
            tableOption['searching'] = data.searching;
        }

        tableOption['scrollX'] = true;

        if (dataReadForShow.length != 0) {
            $(document).ready(function () {
                $('#' + data.id).DataTable(tableOption);
            });
        }


        return this;
    }

    run(func) {
        var k = this;
        var tt = this.data.qr;
        AuditDevQuery(datalogin, tt, (a) => {
            k.data.data = a;
            globalThis[k.data.id] = k;
            if (func != undefined) {
                func(k)
            }
        })
    }

}