import Chart from "chart.js/auto";

export function stats() {
    var xValues = Array();
    var yValues = Array();

    let myChart1 = document.querySelector("#myChart1");

    if (myChart1 != null) {
        let myChart2 = document.querySelector("#myChart2");
        let myChart3 = document.querySelector("#myChart3");
        let myChart4 = document.querySelector("#myChart4");

        axios
            .get("/stats")
            .then((response) => {
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

export const selectClientSection = () => {
    let tablinkClient = document.querySelectorAll(".tablink_client");

    if (tablinkClient != null) {
        let tabcontentClient = document.querySelectorAll(".tabcontent_client");

        function selectClientSection(e) {
            e.preventDefault();

            tabcontentClient.forEach((item) => {
                item.classList.remove("d-block");
                item.classList.add("d-none");
            });

            let tab = e.currentTarget.id;
            let tabcontentId = tab.slice(0, tab.length - 3);

            var el = document.querySelectorAll("." + tabcontentId);

            el[0].classList.remove("d-none");
            el[0].classList.add("d-block");

            let clientMobileDrawer = document.querySelector(
                ".client_mobile_drawer"
            );
            let clientDrawerWidth =
                clientMobileDrawer.getBoundingClientRect().width;

            gsap.to(clientMobileDrawer, {
                x: -clientDrawerWidth,
                force3D: true,
                boxShadow: "none",
                ease: "power2.in",
                duration: 0.81,
            });
        }

        tablinkClient.forEach((item) =>
            item.addEventListener("click", (e) => selectClientSection(e))
        );
    }
};

export function openClientDrawer() {
    let openMobileClientDrawerBtn = document.querySelector(
        ".open_mobile_drawer"
    );

    let clientMobileDrawer = document.querySelector(".client_mobile_drawer");
    if (clientMobileDrawer != null) {
        let clientDrawerWidth =
            clientMobileDrawer.getBoundingClientRect().width;

        function openDrawerfn(e) {
            e.preventDefault();
            // document.body.style.position = "fixed";
            // document.body.style.top = `-${window.scrollY}px`;

            gsap.to(clientMobileDrawer, {
                x: "100%",

                force3D: true,
                duration: 0.5,
                // boxShadow: "10px 3px 5px 0px rgba(0,0,0,0.4)",
                // ease: "power2.out",
            });
        }

        openMobileClientDrawerBtn.addEventListener("click", (e) =>
            openDrawerfn(e)
        );
    }
}

export function closeClientDrawer() {
    let closeMobileClientDrawer = document.querySelector(
        ".close_mobile_client_drawer"
    );
    let clientMobileDrawer = document.querySelector(".client_mobile_drawer");
    if (closeMobileClientDrawer != null) {
        let clientDrawerWidth =
            clientMobileDrawer.getBoundingClientRect().width;

        function closeDrawerfn() {
            gsap.to(clientMobileDrawer, {
                x: -clientDrawerWidth,
                force3D: true,
                boxShadow: "none",
                ease: "power2.in",
                duration: 0.81,
            });
        }

        closeMobileClientDrawer.addEventListener("click", closeDrawerfn);

        // window.onscroll = () => closeDrawerfn();
        // window.onclick = (e) => {
        //     if (!e.target.className.includes("drawer")) {
        //         closeDrawerfn();
        //     }
        // };
    }
}
