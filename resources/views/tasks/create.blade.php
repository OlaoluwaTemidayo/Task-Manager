<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus, textarea:focus {
        border-color: #007BFF;
        outline: none;
    }

    button {
        background-color: #007BFF;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    @media (max-width: 400px) {
        form {
            width: 90%;
        }
    }
</style>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Task Title" required>
    <textarea name="description" placeholder="Task Description"></textarea>
    <button type="submit">Save Task</button>
</form>
