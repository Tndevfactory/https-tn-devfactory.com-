require("./bootstrap");

import { closeDrawer, openDrawer } from "./views/components/drawer.blade";
import { backToTop } from "./views/components/back_to_top.blade";

import { welcomeOverlay } from "./views/welcome.blade";
import {
    tabToggleG,
    photoSelector,
    imageZoom,
} from "./views/pages/market/produit/produit.blade";

import {
    AnimateCarousel,
    grabModalConsulterPanier,
} from "./views/components/gsap_carousel.blade";

import { selectViewSearch } from "./views/pages/market/search/search.blade";

import {
    stats,
    selectClientSection,
    openClientDrawer,
    closeClientDrawer,
} from "./views/pages/dashboards/client/client.blade";

import {
    statsAdmin,
    selectAdminSection,
    openAdminDrawer,
    closeAdminDrawer,
} from "./views/pages/dashboards/admin/admin.blade";

import { showLoginPassword } from "./views/auth/login.blade";
import {
    showRegisterPassword,
    showRegisterConfirmPassword,
} from "./views/auth/register.blade";

window.onload = function () {
    // general
    backToTop();
    openDrawer();
    closeDrawer();
    AnimateCarousel();

    //wauth
    showLoginPassword();
    showRegisterPassword();
    showRegisterConfirmPassword();

    //welcome page
    welcomeOverlay();
    grabModalConsulterPanier();

    //search page
    selectViewSearch();

    // produit page
    photoSelector();
    imageZoom("myimage", "myresult");
    tabToggleG();

    // dashborad
    //client
    stats();
    selectClientSection();
    openClientDrawer();
    closeClientDrawer();

    //admin
    statsAdmin();
    selectAdminSection();
    openAdminDrawer();
    closeAdminDrawer();
};
