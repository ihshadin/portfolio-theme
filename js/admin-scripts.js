jQuery(document).ready(function ($) {
  function toggleGitHubFields() {
    var selectedProjectType = $(
      "#taxonomy-category #categorychecklist input:checked"
    )
      .map(function () {
        return $(this).closest("label").text().trim();
      })
      .get();

    if (selectedProjectType.includes("MERN Stack")) {
      $(".field-front_end_github, .field-back_end_github").show();
    } else {
      $(".field-front_end_github, .field-back_end_github").hide();
    }
  }

  // Initial check on page load
  toggleGitHubFields();

  // Check on change
  $("#taxonomy-category #categorychecklist input").change(function () {
    toggleGitHubFields();
  });
});
