@extends('layouts.app')

@section('content')

<div class="payment-row">
    <div class="payment-col-75">
      <div class="payment-container">
        <form action="/action_page.php">
  
          <div class="payment-row">
            <div class="payment-col-50">
              <h3>Dirección de Envío</h3>
              <label for="fname" class="payment-label"><i class="fa fa-user"></i> Nombre Completo</label>
              <input type="text" id="fname" name="firstname" class="payment-input" placeholder="Gonzálo Suárez Reyes">
              <label for="email" class="payment-label"><i class="fa fa-envelope"></i> Correo</label>
              <input type="text" id="email" name="email" class="payment-input" placeholder="gonzalo@gmail.com">
              <label for="adr" class="payment-label"><i class="fa fa-home"></i> Dirección</label>
              <input type="text" id="adr" name="address" class="payment-input" placeholder="Niños Héroes N° 34">
              <label for="city" class="payment-label"><i class="fa fa-institution"></i> Delegación</label>
              <input type="text" id="city" name="city" class="payment-input" placeholder="Benito Juárez">
  
              <div class="payment-row">
                <div class="payment-col-50">
                  <label for="city" class="payment-label">Ciudad</label>
                  <select id="city" name="city" class="payment-input">
                    <option value="Ciudad de México">Ciudad de México</option>
                    <option value="Guadalajara">Guadalajara</option>
                    <option value="Monterrey">Monterrey</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Tijuana">Tijuana</option>
                    <option value="León">León</option>
                    <option value="Cancún">Cancún</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Mérida">Mérida</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                  </select>
                </div>
                
                <div class="payment-col-50">
                  <label for="zip" class="payment-label">Código Postal</label>
                  <input type="text" id="zip" name="zip" class="payment-input" placeholder="10001">
                </div>
              </div>
            </div>
  
            <div class="payment-col-50">
              <h3>Pago</h3>
              <label for="fname" class="payment-label">Aceptamos tus tarjetas</label>
              <div class="payment-icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname" class="payment-label">Nombre de Tarjeta</label>
              <input type="text" id="cname" name="cardname" class="payment-input" placeholder="Gonzálo Suárez Reyes" required>
              <label for="ccnum" class="payment-label">Número de tarjeta</label>
              <input type="text" id="ccnum" name="cardnumber" class="payment-input" placeholder="4567-2222-3333-4444" required>
              <label for="expmonth" class="payment-label">Mes de vencimiento</label>
              <input type="text" id="expmonth" name="expmonth" class="payment-input" placeholder="Septiembre" required>
  
              <div class="payment-row">
                <div class="payment-col-50">
                  <label for="expyear" class="payment-label">Año de vencimiento</label>
                  <input type="text" id="expyear" name="expyear" class="payment-input" placeholder="2025" required>
                </div>
                <div class="payment-col-50">
                  <label for="cvv" class="payment-label">CVV</label>
                  <input type="text" id="cvv" name="cvv" class="payment-input" placeholder="352" required>
                </div>
              </div>
            </div>
  
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Guardar mi información y consultar más rápidamente la próxima vez
          </label>
          <input type="submit" value="Pagar" class="payment-btn payment-btn-small">
        </form>
      </div>
    </div>
  
    <div class="payment-col-25">
      <div class="payment-container ">
          <h4>Carrito
              <span class="payment-span price" style="color:black">
                  <i class="fa fa-shopping-cart"></i>
                  <span class="cart-badge" id="cart-count">(0)</span>
              </span>
          </h4>
          <div id="cart-items-container">
              <!-- Aquí se insertarán los productos dinámicamente -->
          </div>
          <hr>
          <p>Total <span class="payment-span price" style="color:black"><b id="cart-total">$0</b></span></p>
      </div>
  </div>
  
  
  </div>


@endsection
