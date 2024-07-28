<%@ Page Language="C#" AutoEventWireup="true" CodeFile="validate-21.aspx.cs" Inherits="validate" %>

<!DOCTYPE html>
<script runat="server">

    protected void TextBox1_TextChanged(object sender, EventArgs e)
    {

    }
</script>


<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div style="margin-left: 40px">
    
        <asp:Label ID="Label1" runat="server" Text="Name"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox1" runat="server" OnTextChanged="TextBox1_TextChanged"></asp:TextBox>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="TextBox1" ErrorMessage="please fill the required field">*</asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label2" runat="server" Text="Age"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>
&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="TextBox2" ErrorMessage="please fill the required field">*</asp:RequiredFieldValidator>
        <asp:RangeValidator ID="RangeValidator1" runat="server" ControlToValidate="TextBox2" ErrorMessage="please fill the requied field" MaximumValue="22" MinimumValue="18">Age must be between 18 to 22</asp:RangeValidator>
        <br />
        <br />
        <br />
        <asp:Label ID="Label3" runat="server" Text="stream"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:DropDownList ID="DropDownList1" runat="server">
            <asp:ListItem>BBa</asp:ListItem>
            <asp:ListItem>bca</asp:ListItem>
            <asp:ListItem>bcom</asp:ListItem>
            <asp:ListItem>bsc</asp:ListItem>
        </asp:DropDownList>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="DropDownList1" ErrorMessage="please fill the required field">*</asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label4" runat="server" Text="Email"></asp:Label>
        <asp:TextBox ID="TextBox4" runat="server" OnTextChanged="TextBox4_TextChanged"></asp:TextBox>
&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ControlToValidate="TextBox4" ErrorMessage="please fill the required field">*</asp:RequiredFieldValidator>
        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="TextBox4" ErrorMessage="please fill the required field" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*">Invalid email</asp:RegularExpressionValidator>
        <br />
        <br />
        <asp:Label ID="Label5" runat="server" Text="contact no"></asp:Label>
&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox5" runat="server" OnTextChanged="TextBox4_TextChanged"></asp:TextBox>
&nbsp;&nbsp;
        &nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" ControlToValidate="TextBox5" ErrorMessage="please fill the required field">*</asp:RequiredFieldValidator>
        <asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" ControlToValidate="TextBox5" ErrorMessage="please fill the required field" ValidationExpression="\d{10}">digit should not be greater than 10</asp:RegularExpressionValidator>
        <br />
        <br />
        <asp:Label ID="Label6" runat="server" Text="password"></asp:Label>
&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox6" runat="server" OnTextChanged="TextBox4_TextChanged" TextMode="Password"></asp:TextBox>
&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" ControlToValidate="TextBox6" ErrorMessage="please fill the required field">*</asp:RequiredFieldValidator>
        &nbsp;&nbsp;
        <br />
        <br />
        <asp:Label ID="Label7" runat="server" Text="confirm password"></asp:Label>
&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox7" runat="server" OnTextChanged="TextBox4_TextChanged" TextMode="Password"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator7" runat="server" ErrorMessage="both field must be same" ControlToValidate="TextBox7">*</asp:RequiredFieldValidator>
        <asp:CompareValidator ID="CompareValidator1" runat="server" ErrorMessage="password and confirm password does not match" ControlToCompare="TextBox6" ControlToValidate="TextBox7"></asp:CompareValidator>
        <br />
        <br />
        <br />
        <asp:Label ID="Label8" runat="server" Text="Date of birth"></asp:Label>
&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox8" runat="server" OnTextChanged="TextBox4_TextChanged"></asp:TextBox>
&nbsp;&nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator8" runat="server" ControlToValidate="TextBox8" ErrorMessage="please fill the required field">*</asp:RequiredFieldValidator>
        <br />
        <br />
        <br />
        <asp:Button ID="Button1" runat="server" Text="submit" OnClick="Button1_Click" />
&nbsp;&nbsp;&nbsp;
        <input id="Reset1" type="reset" value="reset" /><br />
        <br />
        <asp:Panel ID="Panel1" runat="server" Visible="False">
            <br />
            <asp:Label ID="Label9" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <asp:Label ID="Label10" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <asp:Label ID="Label11" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <asp:Label ID="Label12" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <asp:Label ID="Label13" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <asp:Label ID="Label14" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <asp:Label ID="Label15" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <asp:Label ID="Label16" runat="server" Text="Label"></asp:Label>
            <br />
            <br />
            <br />
            <br />
        </asp:Panel>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    
    </div>
    </form>
</body>
</html>
