function validate() {
    if (document.login.username.value == "") {
        document.getElementById("username_err").innerHTML = "Please enter your username";
        return false;
    }

    if (document.login.password.value == "") {
        document.getElementById("password_err").innerHTML = "Please enter your password";
        return false;
    }
    return true;
}

function validate_plant_add() {

    if(document.addplants.name.value == "") {
        document.getElementById("name_err").innerHTML = "Please enter the name of the plant";
        return false;
    }

    if(document.addplants.scientific_name.value == "") {
        document.getElementById("sci_name_err").innerHTML = "Please enter the scientific name of the plant";
        return false;
    }

    if(document.addplants.family.value == "") {
        document.getElementById("family_err").innerHTML = "Please enter the family of the plant";
        return false;
    }

    if(document.addplants.nativity.value == "") {
        document.getElementById("nav_err").innerHTML = "Please enter the nativity of the plant";
        return false;
    }

    if(document.addplants.description.value == "") {
        document.getElementById("descr_err").innerHTML = "Please enter the description of the plant";
        return false;
    }

    if(document.addplants.imagelink.value == "") {
        document.getElementById("link_err").innerHTML = "Please enter the image link of the plant";
        return false;
    }
    return true;
}

function validate_contributor_add() {
    if(document.addcontributors.username.value == "") {
        document.getElementById("username_err").innerHTML = "Please enter a username";
        return false;
    }

    if(document.addcontributors.password.value == "") {
        document.getElementById("password_err").innerHTML = "Please enter a password";
        return false;
    }

    if(document.addcontributors.name.value == "") {
        document.getElementById("name_err").innerHTML = "Please enter a name";
        return false;
    }

    if(document.addcontributors.level.value == "") {
        document.getElementById("privilege_err").innerHTML = "Please select a privilege level";
        return false;
    }
    return true;
}

function validate_plant_edit() {
    if(document.editplants.name.value == "") {
        document.getElementById("name_err").innerHTML = "Please enter the name of the plant";
        return false;
    }

    if(document.editplants.scientific_name.value == "") {
        document.getElementById("sci_name_err").innerHTML = "Please enter the scientific name of the plant";
        return false;
    }

    if(document.editplants.family.value == "") {
        document.getElementById("family_err").innerHTML = "Please enter the family of the plant";
        return false;
    }

    if(document.editplants.nativity.value == "") {
        document.getElementById("nav_err").innerHTML = "Please enter the nativity of the plant";
        return false;
    }

    if(document.editplants.description.value == "") {
        document.getElementById("descr_err").innerHTML = "Please enter the description of the plant";
        return false;
    }

    if(document.editplants.imagelink.value == "") {
        document.getElementById("link_err").innerHTML = "Please enter the image link of the plant";
        return false;
    }
    return true;
}

// remove error messages if received input or clicked inside input
function remove_username_err() {
    document.getElementById("username_err").innerHTML = "";
}

function remove_password_err() {
    document.getElementById("password_err").innerHTML = "";
}

function remove_priviledge_err() {
    document.getElementById("privilege_err").innerHTML = "";
}

function removeloginerr() {
    document.getElementById("login_err").innerHTML = "";
}

function remove_name_err() {
    document.getElementById("name_err").innerHTML = "";
}

function remove_sci_name_err() {
    document.getElementById("sci_name_err").innerHTML = "";
}

function remove_family_name_err() {
    document.getElementById("family_err").innerHTML = "";
}

function remove_nativity_err() {
    document.getElementById("nav_err").innerHTML = "";
}

function remove_descr_err() {
    document.getElementById("descr_err").innerHTML = "";
}

function remove_link_err() {
    document.getElementById("link_err").innerHTML = "";
}

function remove_add_msg() {
	document.getElementById("add_success").innerHTML = "";
	document.getElementById("add_fail").innerHTML = "";
}
