<h1>Kontakt</h1>

<form class="mb-3">

    <div class="mb-3">
        <label for="oslovenie" class="form-label">Oslovenie</label>
        <select class="form-select" id="oslovenie" name="oslovenie">
            <option>Vyberte si oslovenie</option>
            <option value="1">Slečna</option>
            <option value="2">Pani</option>
            <option value="3">Pán</option>
        </select>
    </div>

    <div class="mb-3 form-floating">
        <input type="text" class="form-control" id="meno" name="meno" placeholder="Jozef">
        <label for="meno" class="form-label">Meno</label>
    </div>

    <div class="mb-3">
        <label for="priezvisko" class="form-label">Priezvisko</label>
        <input type="text" class="form-control" id="priezvisko" name="priezvisko" placeholder="Novák">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="jozef.novak@firma.sk">
    </div>

    <div class="mb-3">
        <label for="heslo" class="form-label">Heslo</label>
        <input type="password" class="form-control" id="heslo" name="heslo" placeholder="Zadajte heslo">
        <div class="form-text">
            Heslo musí obsahovať minimálne 8 znakov, musí obsahovať písmená a číslice, nesmie obsahovať medzeru.
        </div>
    </div>

    <div class="mb-3">
        <label for="sprava" class="form-label">Správa</label>
        <textarea class="form-control" id="sprava" name="sprava" placeholder="Zadajte Vašu správu" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="priloha" class="form-label">Prílohy</label>
        <input class="form-control" type="file" id="priloha" name="priloha[]"
            accept="image/jpeg,image/png,application/pdf" multiple>
        <div class="form-text">
            Iba súbory typu JPG, PNG a PDF!
        </div>
    </div>

    <div class="mb-3">
        <label for="priloha2" class="form-label">Jedna príloha</label>
        <input class="form-control" type="file" id="priloha2" name="priloha2" multiple>
    </div>

    <div class="mb-3 d-flex align-items-start">
        <div class="me-3">Obľúbené ročné obdobie:</div>
        <div class="d-flex flex-column">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="obdobie" value="1" id="obdobie1">
                <label class="form-check-label" for="obdobie1">
                    jar
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="obdobie" value="2" id="obdobie2">
                <label class="form-check-label" for="obdobie2">
                    leto
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="obdobie" value="3" id="obdobie3">
                <label class="form-check-label" for="obdobie3">
                    jeseň
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="obdobie" value="4" id="obdobie4">
                <label class="form-check-label" for="obdobie4">
                    zima
                </label>
            </div>
        </div>
    </div>

    <div class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" value="1" name="suhlas" id="suhlas">
        <label class="form-check-label" for="suhlas">
            Súhlasím s podmienkami
        </label>
    </div>

    <div class="mb-3">
        <label for="rozsah" class="form-label">Rozsah</label>
        <input type="range" class="form-range" min="0" max="100" value="0" id="rozsah" name="rozsah">
        Hodnota: <span id="rozsah-hodnota">0</span>
    </div>

    <div class="mb-3 d-flex align-items-end">
        <label for="farba" class="form-label me-3">Obľúbená farba:</label>
        <input type="color" class="form-control form-control-color" id="farba" name="farba" value="#563d7c">
    </div>

    <div class="mb-3">
        <label for="zoznam" class="form-label me-3">Obľúbené ovocie:</label>
        <input type="text" list="datalistMoznosti" class="form-control" id="zoznam" name="zoznam"
            placeholder="Začnite písať...">
        <datalist id="datalistMoznosti">
            <option value="jablko">
            <option value="hruška">
            <option value="hrozno">
            <option value="pomaranč">
            <option value="mandarínka">
            <option value="melón">
            <option value="čerešne">
            <option value="maliny">
            <option value="jahody">
        </datalist>
    </div>


    <button type="submit" class="btn btn-primary">Odoslať formulár</button>
    <button type="reset" class="btn btn-danger">Vymazať formulár</button>

</form>