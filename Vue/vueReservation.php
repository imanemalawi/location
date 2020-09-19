<div class="wheel-start3">
    <img src="images/bg7.jpg" alt="" class="wheel-img">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                    <h3>Reservation</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Reservation</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /////////////////////////////////// -->
<div class="step-wrap">
    <!-- ////////////////////////////////////////// -->
    <div class="container padd-lr0">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <ul class="steps">
                  <li class="title-wrap active">
                      <div class="title">
                          <span>1.</span>Réserver une voiture
                      </div>
                  </li>
                  <li class="title-wrap ">
                      <div class="title">
                          <span>2.</span>Choix de Voiture
                      </div>
                  </li>

                  <li class="title-wrap ">
                      <div class="title">
                          <span>3.</span>Informations
                      </div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// -->
</div>
<!-- ////////////////////////////////////////// -->
<div class="reservation">
    <div class="container padd-lr0 marg-lg-t100 marg-lg-b100 marg-xs-t0 marg-xs-b0">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <!-- ////////////////////////////////////////// -->
                <div class="wheel-start-form wheel-start-form2">
                    <form action="/LocationVoitures" method="get">
                        <input type="hidden" name="action" value="reservation_selectcar">
                        <label for="input-val20"><span>Ville Depart</span>
                        <input type="text" name="ville_depart" id=input-val20 placeholder="Nom de la ville" required>
                        </label>
                        <label for="input-val21"><span>Ville Fin</span>
                        <input type="text" name="ville_fin" id=input-val21 placeholder="Nom de la ville" required>
                        </label>
                        <div class="clearfix">
                            <div class="wheel-date">
                                <span>date debut</span>
                                <label class="fa fa-calendar" for="input-val22">
                                <input  class="datetimepicker" type="text" name="date_debut" id=input-val22 value="29 Apr">
                                </label>
                            </div>

                            <div class="wheel-date">
                                <span>date fin</span>
                                <label class="fa fa-calendar" for="input-val24">
                                <input  class="datetimepicker" type="text" name="date_fin" id=input-val24 value="29 Apr">
                                </label>
                            </div>

                            <div class="wheel-date">
                                <span>Age</span>
                                <select name="age" class="selectpicker">
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                    <option>41</option>
                                    <option>42</option>
                                    <option>43</option>
                                    <option>44</option>
                                    <option>45</option>
                                    <option>46</option>
                                    <option>47</option>
                                    <option>48</option>
                                    <option>49</option>
                                    <option>50</option>
                                </select>
                            </div>


                            <label for="input-val27" class="promo promo2">
                            </label>
                        </div>
                        <button type="submit">Chercher</button>

                    </form>
                </div>
                <!-- ////////////////////////////////////////// -->
            </div>
        </div>
    </div>
</div>
