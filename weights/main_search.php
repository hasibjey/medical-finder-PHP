<!-- search section -->
<section class="main-search-section">
    <div class="search-box">
        <h3 class="search-title">
            Search Doctor & Hospital
        </h3>
        <form action="" method="get">
            <div class="row">
                <div class="col-6 p-1">
                    <select class="form-select search-form" onchange="searchType(this)">
                        <option value="" disabled selected>Select Service</option>
                        <option value="doctor">Doctor</option>
                        <option value="hospital">Hospital</option>
                    </select>
                </div>
                <div class="col-6 p-1 search-doctor">
                    <select class="form-select search-form">
                        <option value="" disabled selected>Select Specialization</option>
                    </select>
                </div>
                <div class="col-6 p-1">
                    <select class="form-select search-form">
                        <option value="" disabled selected>Distic</option>
                    </select>
                </div>
                <div class="col-6 p-1">
                    <select class="form-select search-form">
                        <option value="" disabled selected>Area</option>
                    </select>
                </div>
                <div class="col-6 p-1 search-doctor">
                    <select class="form-select search-form">
                        <option value="" disabled selected>Hospital</option>
                        <option value="">Fardin</option>
                        <option value="">IBN Sina</option>
                    </select>
                </div>
            </div>
            <div class="row main-search-btn">
                <div class="col-4">
                    <button class="btn search-btn">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>