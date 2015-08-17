<?php $title = 'nØllans biljetter'; include('template/head.php'); ?>

<div class="row">
  <div class="large-12 columns">
    <h1>nØllans biljetter</h1>
    <p>
      Infon på den här sidan gäller nØllan. För faddrar, se <a href="fester.php">fester</a>.
    </p>
    <ul class="accordion" data-accordion>
      <li class="accordion-navigation">
        <a href="#praktisk-info">Praktisk info</a>
        <div id="praktisk-info" class="content">
          <h2>Kontanter och Swish</h2>
          <p>
            nØllan kan anmäla sig till sina förfaddrar och betala med kontanter eller med Swish till 1235039722.
          </p>
          <h2>Kort</h2>
          <p>
            nØllan kan även betala med kort om de köper biljett hos Biljettförsäljaren (Ryll) som kommer att finnas tillgänglig i samband med infon fr.o.m. tisdag 18/8.
          </p>
        </div>
      </li>
      <li class="accordion-navigation">
        <a href="#priser">Priser</a>
        <table id="priser" class="content">
          <tr><th>Fest</th><th>Alk</th><th>Alkfri</th></tr>
          <tr>
            <td>Välkomstgasquen</td>
            <td>160</td>
            <td>110</td>
          </tr>
          <tr>
            <td>nØllebanquetten</td>
            <td>340</td>
            <td>310</td>
          </tr>
          <tr>
            <td>Stuggasquen</td>
            <td>240</td>
            <td>200</td>
          </tr>
          <tr>
            <td colspan="3">
              Alla övriga evenemang är antingen gratis eller betalas på plats (se matschemat).
            </td>
          </tr>
        </table>
      </li>
      <li class="accordion-navigation">
        <a href="#anmalningsstopp">Anmälningsstopp</a>
        <table id="anmalningsstopp" class="content">
          <tr>
            <th>Event</th>
            <th></th>
            <th>Stopp</th>
          </tr>
          <tr>
            <td>Övningsgasquen</td>
            <td colspan="2"><i>(upp till förfaddrarna)</i></td>
          </tr>
          <tr>
            <td>Lunchfrl Ampfield</td>
            <td>19/8 12.00</td>
            <td>17/8 18.00</td>
          </tr>
          <tr>
            <td>Karriärkvällen (mat)</td>
            <td>19/8</td>
            <td>18/8 18.00</td>
          </tr>
          <tr>
            <td>Välkomst</td>
            <td>20/8</td>
            <td>19/8 15.30</td>
          </tr>
          <tr>
            <td>nØllebanquetten</td>
            <td>22/8</td>
            <td>20/8 18.30</td>
          </tr>
          <tr>
            <td>Varning på Stan</td>
            <td>23/8</td>
            <td>21/8 18.30</td>
          </tr>
          <tr>
            <td>SMØ</td>
            <td>26/8</td>
            <td>25/8 13.00</td>
          </tr>
          <tr>
            <td>Binärmiddagen</td>
            <td colspan="2"><i>(upp till förfaddrarna)</i></td>
          </tr>
          <tr>
            <td>Stuggasquen</td>
            <td>29/8</td>
            <td>27/8 18.30</td>
          </tr>
        </table>
      </li>
    </ul>
  </div>
</div>

<?php include('template/footer.php'); ?>
