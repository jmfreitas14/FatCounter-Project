<?php
require_once 'header.php';
require_once 'menu-dentro.php';
?>

<body class="layout-0" data-lang="pt" class=&quot;body-header&quot;>

<style media="screen">
    .globalTopNav-2GCw3 {
        background: #f0f0f0;
        border-bottom: 1px solid #d2d2d2;
        height: 30px;
        overflow: hidden
    }

    .globalTopNav-2GCw3 > ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: 0;
        padding-left: 10px;
        list-style-type: none
    }

    .globalTopNav-2GCw3 > ul > li {
        border-right: 1px solid #d2d2d2
    }

    .globalTopNav-2GCw3 > ul > li > a {
        display: inline-block;
        padding: 6px 12px
    }
</style>

<div id="wrap">

    <div id="content">

        <table class="table0 check-in" summary="check-in">

            <colgroup>
                <col class="col-1"/>
                <col class="col-2 col-num"/>
                <col class="col-3 col-num"/>
                <col class="col-4">
            </colgroup>

            <thead>

            <tr>

                <td>Medida</td>
                <td class="col-num">Data</td>
                <td class="col-num">Quantidade</td>
                <td class="col-num">Excluir?</td>

            </tr>

            </thead>

            <tfoot>

            <tr>

                <td colspan="4" class="first"></td>

            </tr>

            </tfoot>

            <tbody>


            <tr>
                <td class="first">
                    Peso
                </td>
                <td class="col-num">17/05/2020</td>
                <td class="col-num">95 kg</td>
                </td>
                <td>
                    <a class="remove" data-confirm="Tem certeza de que deseja excluir este registro?"
                       href="#">Excluir?</a>
                </td>
            </tr>
            </tbody>

        </table>

        <h1 class="main-title">Adicionar novo registro</h1>

        <p class="cont-2">

            <label>Data:</label>

            <select id="measurement_entry_date_3i" name="measurement[entry_date(3i)]" class="select short">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select id="measurement_entry_date_2i" name="measurement[entry_date(2i)]" class="select short">
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>
            <select id="measurement_entry_date_1i" name="measurement[entry_date(1i)]" class="select short">
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
            </select>


            <label>Quantidade:</label>

            <span class="unit-form-field standard">


  <span class="">
    <input type="text" name="measurement[display_value]" id="measurement_display_value" class="text short"
           data-unit-system="kg"/>
</span>
  <label class="measurement_label unit_label" for="measurement_display_value">kg</label>

</span>
            <input type="submit" class="button  add-new-entry" value="Adicionar novo registro"/>

        </p>

        </form>

    </div>