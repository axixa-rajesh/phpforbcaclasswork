<form action="">
    1) <input type="text" placeholder="enter name" name="username" autocomplete="off" autofocus required size="6" maxlength="6" minlength="3"> <br>
    2) <input type="password" placeholder="Enter passwrod"> password <br>
    3) <input type="radio"> radio (for single selection in multiple choice (for create group name must be same)) <br>
    4) <input type="checkbox"> checkbox (for multiple selection in multiple choice ) <br>
    5) <input type="hidden"> hidden <br>
    6) <input type="button" value="ok">button use for js <br>
    7) <input type="reset">Reset form <br>
    8) <input type="submit">use for form submit <br>
    9) <input type="file">for file upload <br>
    10) <input type="image" src="rs.jpg" height="30px"> for image cordination behaviour form submit <br>
    11) <input type="number" min="18" max="70" step="6">number <br>
    12) <input type="email">email <br>
    13) <input type="url">url <br>
    14) <input type="color">color <br>
    15) <input type="date" max="<?= date('Y-m-d', time() + 86400 * 3) ?>" min="<?= date('Y-m-d', time() - 86400 * 2) ?>">date <br>
    16) <input type="datetime-local">date and time <br>
    17) <input type="time">time <br>
    18) <input type="month">month <br>
    19) <input type="week">week <br>
    20) <input type="range">Range<br>
    21) <input type="tel">Tel<br>
    22) <input type="search">serach<br>

</form>