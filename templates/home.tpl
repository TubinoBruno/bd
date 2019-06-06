{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
  <body>

    <div id="noticias-container" class="container">
      <h1 class="center">{$Titulo}</h1>
        <p class="center">La Empresa “WMS Tandil” maneja un depósito de almacenamiento de pallets. Estos se guardan en estanterías a lo largo del depósito, que están divididas en filas y a su vez éstas filas se dividen en posiciones; en cada posición se puede guardar un único pallet al mismo tiempo. Cada posición se identifica por la estantería, la fila y su nro de posición dentro de la fila; también el depósito maneja un número único de posición.
Cada fila tiene un alto y el peso máximo que puede soportar.
Las posiciones se alquilan a a un cliente por un determinado intervalo de tiempo. Cuando se vence este tiempo, el cliente tiene 7 días para retirar la mercadería (caso contrario la pierde).
Cuando ingresa un pallet, existe un movimiento de entrada se le asigna una posición de las que el cliente tiene alquiladas (si es que el cliente tiene posiciones libres) y se marca como ocupada dicha posición dentro de las que tiene alquiladas.También se registran los movimientos de egreso de mercadería, que siempre deben hacer referencia a un movimiento de entrada y los movimientos de cambios de posición internos de los pallets que pudieran llegar a haber, que también deben hacer referencia a un movimiento de entrada o a otro movimiento de cambio
Tenga en cuenta que las frases indicadas en negrita cursiva pueden no haber sido plasmadas en el Diagrama.</p>
            <h2 class="center">Trabajo realizado por Jose Miguez y Bruno Tubino</h1>

      
      </ul>
    </div>




{include file = "footer.tpl"}
</body>
</html>
