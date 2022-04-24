<div class="sidebar" style = "color:blue ">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Tracking
          </a>
        </div>

        <ul class="nav">
                        <a data-toggle="collapse" href="#btcOptions" aria-expanded="true">
                          <i class="tim-icons icon-notes"></i>
                          <p>
                            BTC
                            <b class="caret"></b>
                          </p>
                        </a>
                        <div class="collapse show " id="btcOptions">
                          <ul class="nav">
                            <li>
                               <a href="javascript:muteAll()">Mute All</a>
                            </li>
                            <li >
                              <a >
                                <div class="form-group">
                                    <input type="text" class="form-control option" coinName = "btc" coin = "0" opt = "0" value = "<?php if(isset($_SESSION['coin00'])) echo $_SESSION['coin00']; else echo "55000"; ?>" id = "btcOptionPrice">
                                    <span class="form-text" >Price Bought</span>
                                    <input type="text" value = "<?php if(isset($_SESSION['coin01'])) echo $_SESSION['coin01']; else echo "55000"; ?>" class="form-control option" coinName = "btc" coin = "0" opt = "1" id = "btcOptionMax">
                                    <span class="form-text">Max (alarm)</span>
                                    <input type="text" value = "50000" class="form-control option" coinName = "btc" coin = "0" opt = "2" id = "btcOptionMin">
                                    <span class="form-text">Min (alarm)</span>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </ul>

                      <ul class="nav">
                                      <a data-toggle="collapse" href="#ltcOptions" aria-expanded="true">
                                        <i class="tim-icons icon-notes"></i>
                                        <p>
                                          LTC
                                          <b class="caret"></b>
                                        </p>
                                      </a>
                                      <div class="collapse show " id="ltcOptions">
                                        <ul class="nav">
                                          <li >
                                            <a >
                                              <div class="form-group">
                                                  <input type="text" class="form-control" value = "231" coinName = "ltc" coin = "0" opt = "0" id = "ltcOptionPrice">
                                                  <span class="form-text" >Price Bought</span>
                                                  <input type="text" value = "237" class="form-control" coinName = "ltc" coin = "0" opt = "1" id = "ltcOptionMax">
                                                  <span class="form-text">Max (alarm)</span>
                                                  <input type="text" value = "200" class="form-control" coinName = "ltc" coin = "0" opt = "2" id = "ltcOptionMin">
                                                  <span class="form-text">Min (alarm)</span>
                                              </div>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                          </ul>
                          <ul class="nav">
                                          <a data-toggle="collapse" href="#compOptions" aria-expanded="true">
                                            <i class="tim-icons icon-notes"></i>
                                            <p>
                                              COMP
                                              <b class="caret"></b>
                                            </p>
                                          </a>
                                          <div class="collapse show " id="compOptions">
                                            <ul class="nav">
                                              <li >
                                                <a >
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" value = "450" id = "compOptionPrice">
                                                      <span class="form-text" >Price Bought</span>
                                                      <input type="text" value = "465" class="form-control" id = "compOptionMax">
                                                      <span class="form-text">Max (alarm)</span>
                                                      <input type="text" value = "400" class="form-control" id = "compOptionMin">
                                                      <span class="form-text">Min (alarm)</span>
                                                  </div>
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                              </ul>

      </div>
    </div>
