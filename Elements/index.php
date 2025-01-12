<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Elements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
            line-height: 1.8;
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5rem;
            text-align: center;
        }
        p, b, i, small, big, ins, em, strong, code, samp, kbd, dfn, var, cite, u, tt {
            display: block;
            margin: 10px 0;
        }
        b {
            color: #d9534f;
        }
        i, em, dfn, cite {
            font-style: italic;
            color: #5bc0de;
        }
       
        small {
            font-size: 0.85rem;
            color: #888;
        }
        big {
            font-size: 1.5rem;
            color: #5cb85c;
        }
        ins {
            text-decoration: underline;
            color: #0275d8;
        }
        del {
            text-decoration: line-through;
            color: #d9534f;
        }
        code {
            background-color: #e8e8e8;
            padding: 5px;
            border-radius: 4px;
            font-family: "Courier New", Courier, monospace;
        }
        samp, kbd {
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 3px;
            font-family: "Courier New", Courier, monospace;
        }
        kbd {
            font-weight: bold;
        }
        u {
            text-decoration: underline;
            color: #f0ad4e;
        }
        tt {
            font-family: "Courier New", Courier, monospace;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <h1>This is my h1 tag</h1>
    <p>This is my paragraph tag</p>
    <b>This is used to bold the content</b>
    <i>This is italic text</i>
   <p> H<sub>2</sub>O </p>
    <br>
    <p>E = MC<sup>2</sup></p>
    <br>
    <small><i>Small Italic</i></small>
    <big>Bigger</big>
    <ins>Inserted Text</ins>
    <del>Deleted Text</del>
    <em>Emphasized Text</em>
    <strong>Strong Emphasis</strong>
    <code>Code Snippet</code>
    <samp>Sample Output</samp>
    <kbd>Keyboard Input</kbd>
    <dfn>Definition</dfn>
    <var>Variable</var>
    <cite>Citation</cite>
    <u>Underline Text</u>
    <tt>Teletype Text</tt>
</body>
</html>
