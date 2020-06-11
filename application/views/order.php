<html>
  <head>
    <title>
    
    </title>
    <style>
      form{line-height:2em} label, select,input{ margin-left: 95px; width: 120px; display: block; float: left; line-height: 15px } </style>
  </head>
  <center>
  <body style="background-color: orange">
    
  
    <form name="form">
      <label>
        Nama
      </label>
      <input type="text" name="input_nama" size=10>
      <br/>
      <label>
       Film
      </label>
      <select name="input_tujuan" >
        <option value="#">
          --Pilih--
        </option>
        <option value="Moonlight">
          Moonlight
        </option>
        <option value="Star Wars">
          Star Wars
        </option>
        <option value="Richard Parker">
          Richard Parker
        </option>
      </select>
      <br>
      <label>
       Jam
      </label>
      <select name="input_tujuan" >
        <option value="#">
          10.00 - 12.00
        </option>
      </select>
      <br>
      <label>
       Studio
      </label>
      <select name="input_tipetiket"">
        <option value="#">
          --Pilih--
        </option>
        <option value="VVIP">
          A
        </option>
        <option value="VIP">
          B
        </option>
        <option value="Ekonomi">
          C
        </option>
      </select>
      <br>
      <label>
        Jumlah Tiket
      </label>
      <input type="text" name="input_jumlahtiket" size=10>
      <br/>
      <input type="button" Onclick="totalharga()" value='Send'>
      <input type="reset" value='Clear'>
      <br/>
    </form>
      
  </body>
</center>
</html>
