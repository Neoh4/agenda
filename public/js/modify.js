var homeworkPopupWindow;

        function openHomeworkPopup(id, name, idProf, description, deadline) {
            var popupContent = `
                <div class="homework-form">
                    <h2>Edit Homework</h2>
                    <label for="homeworkName">Name:</label>
                    <input type="text" id="homeworkName" value="${name}">
                    <label for="homeworkIdProf">ID Professor:</label>
                    <input type="text" id="homeworkIdProf" value="${idProf}">
                    <label for="homeworkDescription">Description:</label>
                    <textarea id="homeworkDescription">${description}</textarea>
                    <label for="homeworkDeadline">Deadline:</label>
                    <input type="date" id="homeworkDeadline" value="${deadline}">
                    <button onclick="saveHomework(${id})">Save</button>
                </div>
            `;
            homeworkPopupWindow = window.open("", "Homework Edit Popup", "width=600,height=400");
            homeworkPopupWindow.document.write(popupContent);
        }

        function saveHomework(id) {
            var newName = homeworkPopupWindow.document.getElementById("homeworkName").value;
            var newIdProf = homeworkPopupWindow.document.getElementById("homeworkIdProf").value;
            var newDescription = homeworkPopupWindow.document.getElementById("homeworkDescription").value;
            var newDeadline = homeworkPopupWindow.document.getElementById("homeworkDeadline").value;

            // Perform save operation here, for example, through an AJAX call to the server
            // After saving, you may want to close the popup window
            homeworkPopupWindow.close();
        }