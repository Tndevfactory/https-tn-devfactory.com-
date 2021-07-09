import Chart from "chart.js/auto";
import { loader } from "./../../../components/loader.blade";

export function statsAdmin() {
    var xValues = Array();
    var yValues = Array();

    let myChart1 = document.querySelector("#myChart11");

    if (myChart1 != null) {
        let myChart2 = document.querySelector("#myChart22");
        let myChart3 = document.querySelector("#myChart33");
        let myChart4 = document.querySelector("#myChart44");

        loader("show");

        axios
            .get("/stats")
            .then((response) => {
                loader("hide");

                for (var i = 0; i < response.data.xValues.length; i++) {
                    xValues.push(response.data.xValues[i]);
                }

                for (var i = 0; i < response.data.yValues.length; i++) {
                    yValues.push(response.data.yValues[i]);
                }

                // console.log(xValues);
                //console.log(yValues);

                new Chart(myChart1, {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [
                            {
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,0,255,1.0)",
                                borderColor: "rgba(0,0,255,0.1)",
                                data: yValues,
                            },
                        ],
                    },
                    options: {
                        legend: { display: false },
                        scales: {
                            yAxes: [{ ticks: { min: 6, max: 16 } }],
                        },
                    },
                });

                new Chart(myChart2, {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [
                            {
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,0,255,1.0)",
                                borderColor: "rgba(0,0,255,0.1)",
                                data: yValues,
                            },
                        ],
                    },
                    options: {
                        legend: { display: false },
                        scales: {
                            yAxes: [{ ticks: { min: 6, max: 16 } }],
                        },
                    },
                });

                new Chart(myChart3, {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [
                            {
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,0,255,1.0)",
                                borderColor: "rgba(0,0,255,0.1)",
                                data: yValues,
                            },
                        ],
                    },
                    options: {
                        legend: { display: false },
                        scales: {
                            yAxes: [{ ticks: { min: 6, max: 16 } }],
                        },
                    },
                });

                new Chart(myChart4, {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [
                            {
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,0,255,1.0)",
                                borderColor: "rgba(0,0,255,0.1)",
                                data: yValues,
                            },
                        ],
                    },
                    options: {
                        legend: { display: false },
                        scales: {
                            yAxes: [{ ticks: { min: 6, max: 16 } }],
                        },
                    },
                });
            })
            .catch((error) => console.log(error));
    }
}

export const selectAdminSection = () => {
    let tablinkAdmin = document.querySelectorAll(".tablink_admin");

    if (tablinkAdmin != null) {
        let tabcontentAdmin = document.querySelectorAll(".tabcontent_admin");

        function selectAdminSection(e) {
            e.preventDefault();

            tabcontentAdmin.forEach((item) => {
                item.classList.remove("d-block");
                item.classList.add("d-none");
            });

            let tab = e.currentTarget.id;
            let tabcontentId = tab.slice(0, tab.length - 3);
            // console.log(tabcontentId);
            // get the latest update from controller
            if (tabcontentId === "stats_admin_content") {
                statsAdmin();
            }
            var el = document.querySelectorAll("." + tabcontentId);

            el[0].classList.remove("d-none");
            el[0].classList.add("d-block");

            let adminMobileDrawer = document.querySelector(
                ".admin_mobile_drawer"
            );
            let adminDrawerWidth =
                adminMobileDrawer.getBoundingClientRect().width;

            gsap.to(adminMobileDrawer, {
                x: -adminDrawerWidth,
                force3D: true,
                boxShadow: "none",
                ease: "power2.in",
                duration: 0.81,
            });
        }

        tablinkAdmin.forEach((item) =>
            item.addEventListener("click", (e) => selectAdminSection(e))
        );
    }
};

export function openAdminDrawer() {
    let openMobileAdminDrawerBtn = document.querySelector(
        ".open_mobile_drawer"
    );

    let adminMobileDrawer = document.querySelector(".admin_mobile_drawer");
    if (adminMobileDrawer != null) {
        //let adminDrawerWidth = adminMobileDrawer.getBoundingClientRect().width;

        function openDrawerfn(e) {
            e.preventDefault();
            // document.body.style.position = "fixed";
            // document.body.style.top = `-${window.scrollY}px`;

            gsap.to(adminMobileDrawer, {
                x: "100%",

                force3D: true,
                duration: 0.5,
                // boxShadow: "10px 3px 5px 0px rgba(0,0,0,0.4)",
                // ease: "power2.out",
            });
        }

        openMobileAdminDrawerBtn.addEventListener("click", (e) =>
            openDrawerfn(e)
        );
    }
}

export function closeAdminDrawer() {
    let closeMobileAdminDrawer = document.querySelector(
        ".close_mobile_admin_drawer"
    );
    let adminMobileDrawer = document.querySelector(".admin_mobile_drawer");
    if (closeMobileAdminDrawer != null) {
        let adminDrawerWidth = adminMobileDrawer.getBoundingClientRect().width;

        function closeDrawerfn() {
            gsap.to(adminMobileDrawer, {
                x: -adminDrawerWidth,
                force3D: true,
                boxShadow: "none",
                ease: "power2.in",
                duration: 0.81,
            });
        }

        closeMobileAdminDrawer.addEventListener("click", closeDrawerfn);

        // window.onscroll = () => closeDrawerfn();
        // window.onclick = (e) => {
        //     if (!e.target.className.includes("drawer")) {
        //         closeDrawerfn();
        //     }
        // };
    }
}
