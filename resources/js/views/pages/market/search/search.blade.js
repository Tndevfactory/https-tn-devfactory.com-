export function selectViewSearch() {
    let searchColumnBtn = document.querySelector(".search_column_btn");
    if (searchColumnBtn != null) {
        let searchRowBtn = document.querySelector(".search_row_btn");

        let searchColumn = document.querySelector(".search_column");
        let searchRow = document.querySelector(".search_row");

        function changeViewSearchColumn(e) {
            e.preventDefault();

            if (!searchColumn.classList.contains("d-block")) {
                searchColumn.classList.remove("d-none");
                searchColumn.classList.add("d-block");
                searchRow.classList.remove("d-block");
                searchRow.classList.add("d-none");
            }
        }

        function changeViewSearchRow(e) {
            e.preventDefault();

            if (!searchRow.classList.contains("d-block")) {
                searchRow.classList.remove("d-none");
                searchRow.classList.add("d-block");
                searchColumn.classList.remove("d-block");
                searchColumn.classList.add("d-none");
            }
        }

        searchColumnBtn.addEventListener("click", (e) =>
            changeViewSearchColumn(e)
        );
        searchRowBtn.addEventListener("click", (e) => changeViewSearchRow(e));
    }
}
