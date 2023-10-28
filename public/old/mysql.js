String.prototype.replaceAll = function (find, replace) {
     var str = this;
     return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
 };
var db = function(url = "/") {
return {
    data: {
        table: "",
        limit: "",
        order: "",
        select: " * ",
        condition: "",
        setCreate: 0,
        leftJoin: "",
        saveset: 0,
        debug: false,
        updatedata: null
    },
    urlsave : url+"api/save",
    urlget: url+"api/okb",
    table: function(a){
      this.data.table = a;
      return this;
    },
    condition : function(a = []){
       var sp = " WHERE ";
       sp += a.map(function(x,i){
           return ` ${x.opsi} ${x.data[0]} ${x.data[1]} ${x.data[2]} `;
       }).join(" ")
       this.data.condition = sp;
       return this;
    },
    select: function(a){
       this.data.select = a;
       return this;
    },
    update: function(a = {}){
        var up = " UPDATE "+this.data.table+" SET ";
        up += Object.keys(a).map(function(x, s){
          return ` ${x} = '${a[x]}' `;
        }).join(",")
        up += this.data.condition;
        this.data.updatedata = up;
        return this;
    },
    leftJoin: function(a = []){
        this.data.leftJoin = '';
        var pp = this;
        a.forEach(function(y,i){
            pp.data.leftJoin += " LEFT JOIN "+y[0]+" ON "+y[1]+" "+y[2]+" "+y[3]+" ";
        })
        return this;
    },
    order: function(a,b = "ASC"){
       this.data.order = ` ORDER BY ${a} ${b} `;
       return this;
    },
    limit: function(a, b){
       this.data.limit = ` LIMIT ${a}, ${b}  `;
       return this;
    },
    save: function(obj = {}){
        var dat = Object.keys(obj);
        var dd = dat.map(function(x,c){
                return '"'+obj[x]+'"';
            }).join(",");

        this.data.saveset = 1;
        this.data.save = `INSERT INTO ${this.data.table} (${dat.join(",")}) VALUES (${dd}) `;
        return this;
    },
    debug : function(){
        this.data.debug = true;
        return this;
    },createTable: function(a = {}){
        this.data.setCreate = 1;
        this.data.createTable = "CREATE TABLE "+this.data.table+" (";
        this.data.createTable += " id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, ";
        var pp = this;
        Object.keys(a).forEach(function(x, i){
            if(i == (Object.keys(a).length - 1)){
                pp.data.createTable += " "+x+" "+a[x]+" ";
            }else{
                pp.data.createTable += " "+x+" "+a[x]+" , ";
            }
        })
        this.data.createTable += " ) ";
        return this;
    },
    text2Binary : function( string) {
        return string.split('').map(function (char) {
            return char.charCodeAt(0).toString(2);
        }).join(' ');
        return this;
    },
    get: function(func, qr = null){
        var ck = this;
        var query = "";
        query = ` SELECT ${this.data.select} FROM ${this.data.table} ${this.data.leftJoin} ${this.data.condition} ${this.data.order} ${this.data.limit} `;
        //alert(query);
        if(qr != null){
            query = qr;
        }

        if(this.data.setCreate == 1){
            query = this.data.createTable;
        }
        if(this.data.saveset == 1){
            query = this.data.save;
        }

        if(this.data.updatedata != null){
          query = this.data.updatedata;
        }
        if (this.data.debug != false) {
        }

        console.log(query);

        query = query.replaceAll('(','_<<_');
        query = query.replaceAll(')','_>>_');
        query = query.replaceAll('*','_<->_');
        query = query.replaceAll("'", "_<|_");
        query = query.replaceAll("\"", "_|>_");
        query = query.replaceAll("\"", "_|>_");
        query = query.replaceAll("\/", "_||_");
        query = query.replaceAll("%", "|~~|");
        query = query.replaceAll("ca", "~|ca|~");
        query = query.replaceAll("CA", "~|CA|~");
        query = encodeURIComponent(query);

        console.log(query)

        $.ajax({
            url: this.urlget+'/'+query,
            success:function(res){
              if(res.indexOf('simpan') >= 0){
                func(ck)
              }else{
                func(JSON.parse(res), ck)
              }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        })
        return this;
    }
 }
}
