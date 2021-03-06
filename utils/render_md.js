window.onload = markdownRender;

function markdownRender() {

    // Headings
    str = $(".markdown").text();
    str = str.replace(/^# (.*)$/sm, '<h1>$1<\/h1>');
    $(".markdown").append(str);
    console.log("Completed markdown. " + str);

    //     str = $(".markdown").text();
    str = str.replace(/^## (.*)$/sm, '<h2>$1<\/h2>');
    $(".markdown").append(str);
    console.log("Completed markdown. " + str);

    //     str = $(".markdown").text();
    str = str.replace(/^### (.*)$/sm, '<h3>$1<\/h3>');
    $(".markdown").append(str);
    console.log("Completed markdown. " + str);

    //     str = $(".markdown").text();
    str = str.replace(/^#### (.*)$/sm, '<h4>$1<\/h4>');
    $(".markdown").append(str);
    console.log("Rendered H4. " + str);

    //     str = $(".markdown").text();
    str = str.replace(/^##### (.*)$/sm, '<h5>$1<\/h5>');
    $(".markdown").append(str);
    console.log("Rendered H5. " + str);

    //     str = $(".markdown").text();
    str = str.replace(/^###### (.*)$/sm, '<h6>$1<\/h6>');
    $(".markdown").append(str);

    // Code Blocks
    //     str = $(".markdown").text();
    str = str.replace(/(?:^|\n)(?:{0,3})(\`\`\`+|\~\~\~+)(?:*)([^\s\`~]*)\n([\s\S]*?)\n(?:{0,3})\1/sm, '<code>$3<\/code>');
    $(".markdown").append(str);

    // HTML elements
    //     str = $(".markdown").text();
    str = str.replace(/^{0,2}(?-){3,}[\t]*$/sm, '<hr>');
    $(".markdown").append(str);

    // Images
    //     str = $(".markdown").text();
    str = str.replace(/!\[([^\]]*?)][\t]*()\([\t]?<?([\S]+?(?:\([\S]*?\)[\S]*?)?)>?(?:=([*\d]+[A-Za-z%]{0,4})x([*\d]+[A-Za-z%]{0,4}))?[\t]*?[\t]?\)/g, '<img src="$3" alt="$1"></img>');
    $(".markdown").append(str);

    // Strikethrough
    //     str = $(".markdown").text();
    str = str.replace(/(^|[^\\])(~+)([^\r]*?[^~])\2(?!`)/sm, '<code>$3<\/code>');
    $(".markdown").append(str);

}