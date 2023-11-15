document.addEventListener("DOMContentLoaded", function () {
    // Select all upvote and downvote buttons
    const upvoteButtons = document.querySelectorAll(".upvote");
    const downvoteButtons = document.querySelectorAll(".downvote");

    // Add click event listeners to upvote buttons
    upvoteButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const threadId = button.getAttribute("data-thread-id");
            castVote(threadId, 1); // 1 for upvote
        });
    });

    // Add click event listeners to downvote buttons
    downvoteButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const threadId = button.getAttribute("data-thread-id");
            castVote(threadId, -1); // -1 for downvote
        });
    });

    // Function to send AJAX request and update votes
    function castVote(threadId, voteType) {
        // Send an AJAX request to a PHP script to update the vote in the database
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "vote.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the vote count displayed on the page if needed
                // For example, you can increment or decrement the vote count
                // based on the response from the server.
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Update the vote count
                    const voteCountElement = document.getElementById(`vote-count-${threadId}`);
                    voteCountElement.innerText = response.voteCount;
                } else {
                    console.error("Voting failed");
                }
            }
        };

        // Send the vote data to the server
        xhr.send(`threadId=${threadId}&voteType=${voteType}`);
    }
});
