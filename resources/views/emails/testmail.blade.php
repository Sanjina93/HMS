<html>

<head>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        button {
            font: inherit;
        }

        .page {
            color: var(--gray-9);
            background-color: var(--gray-0);
            display: grid;
            grid-template-areas: "main";
            min-height: 100vh;
            font-family: var(--font-sans);
        }

        .page__mani {
            grid-area: main;
        }

        .main {
            display: grid;
            justify-items: center;
            align-items: center;
            padding: var(--size-3);
        }

        .main__form {
            max-width: 30em;
        }

        .form {
            color: var(--gray-9);
            background-color: var(--gray-3);
            display: grid;
            padding: var(--size-4);
            width: 100%;
            border: 1px solid var(--gray-4);
            border-radius: var(--radius-2);
        }

        .form__linput {
            display: grid;
            margin-bottom: var(--size-3);
        }

        .form__label {
            margin-bottom: var(--size-2);
        }

        .form__input,
        .form__select {
            padding: 1em 0.7rem;
            border: 1px solid var(--gray-4);
            border-radius: var(--radius-2);
        }
    </style>

</head>

<body class="page">


    <main class="main page__main">
        <div class="form__linput">
            <label class="form__label" for="fname">Header</label>
            <input class="form__input" id="fname" type="text" name="fname" value="{{ $header }}" />
        </div>
        <div class="form__linput">
            <label class="form__label" for="lname">Body</label>
            <input class="form__input" id="lname" type="text" name="lname" value="{{ $body }}" />
        </div>
    </main>
</body>

</html>
