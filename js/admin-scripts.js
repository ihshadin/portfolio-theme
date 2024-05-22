jQuery(document).ready(function ($) {
  function toggleGitHubFields() {
    let selectedProjectType = $(
      "#taxonomy-project_category #project_categorychecklist input:checked"
    )
      .map(function () {
        return $(this).closest("label").text().trim();
      })
      .get();
    console.log(selectedProjectType);
    if (selectedProjectType.includes("MERN Stack")) {
      $(".field-front_end_github, .field-back_end_github").show();
    } else {
      $(".field-front_end_github, .field-back_end_github").hide();
    }
  }

  // Initial check on page load
  toggleGitHubFields();

  // Check on change
  $("#taxonomy-project_category #project_categorychecklist input").change(
    function () {
      toggleGitHubFields();
    }
  );
});
