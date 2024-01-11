<!-- Your select dropdown for filters -->
<select id="filterSelect">
    <option value="filter1">Filter 1</option>
    <option value="filter2">Filter 2</option>
    <option value="filter3">Filter 3</option>
</select>

<!-- Your search input -->
<input type="text" id="searchInput" placeholder="Search">

<!-- Submit button -->
<button id="submitButton">Submit</button>

<!-- Container to display selected filters -->
<div id="filterTagsContainer"></div>

<!-- Your data display area -->
<div id="dataDisplay"></div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Array to store selected filters
    const selectedFilters = [];

    // Function to update filters and fetch filtered data
    function updateFiltersAndFetchData() {
        // Clear previous filters
        selectedFilters.length = 0;

        // Add selected filter to the array
        const selectedFilter = $('#filterSelect').val();
        if (selectedFilter) {
            selectedFilters.push(selectedFilter);
        }

        // Fetch filtered data from the server
        fetchFilteredData(selectedFilters);
    }

    // Function to fetch filtered data from the server
    function fetchFilteredData(filters) {
        // Make an AJAX request to your Laravel backend
        $.ajax({
            method: 'POST',
            url: '/filter-data',
            data: {
                filters: filters
            },
            success: function(response) {
                // Handle the response and update your data display area
                const dataDisplay = $('#dataDisplay');
                dataDisplay.empty();

                // Update data display based on the response
                response.filteredData.forEach(data => {
                    dataDisplay.append('<p>' + data.column + '</p>');
                    // Add more code to display other data fields as needed
                });

                // Display selected filters as tags
                displayFilterTags();
            },
            error: function(error) {
                console.error('Error fetching filtered data:', error);
            }
        });
    }

    // Function to display selected filters as tags
    function displayFilterTags() {
        const filterTagsContainer = $('#filterTagsContainer');
        filterTagsContainer.empty();

        selectedFilters.forEach(filter => {
            const filterTag = $('<span class="badge">' + filter + '</span>');
            filterTagsContainer.append(filterTag);
        });
    }

    // Event listener for the submit button
    $('#submitButton').on('click', function() {
        // Fetch filtered data from the server when the user clicks the submit button
        updateFiltersAndFetchData();
    });

    // Event listener for the search input
    $('#searchInput').on('input', function() {
        // Fetch filtered data from the server when the user types in the search input
        updateFiltersAndFetchData();
    });
</script>

<style>
    /* Style for badges */
    .badge {
        display: inline-block;
        margin: 5px;
        padding: 5px 10px;
        background-color: #6cb2eb;
        color: #ffffff;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
