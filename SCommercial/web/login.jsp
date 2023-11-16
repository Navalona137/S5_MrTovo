<%@page import="model.Service"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <%  
        Service[] a  = (Service[])request.getAttribute("service");
    %>
    <style>
        .form-control {
            width: 100%;
            border: none;
            background: rgba(255, 255, 255, 0.2);
            font-size: 16px !important;
            width: 100%;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            box-shadow: none;
            border: 2px solid rgba(0, 0, 0, 0.1);
            height: 54px;
            font-size: 18px;
            font-weight: 300;
          }
          
        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            outline: none;
            box-shadow: none;
            border-color: #d1c286;
          }  
    </style> 
    
    <body>
        
        <div style="width: 200px; float: left; margin-left:200px">
            <form action="verification" method="post">
                <div class="col-12">
                    <div class="form-material floating">
                        <select name="service" class="form-control">
                            <option value="">Service</option>
                            <% for(int i=0; i<a.length; i++){ 
                                Service service = a[i];
                            %>
                            <option value="<% out.print(service.getid()); %>"><% out.println(service.getnom()); %></option>
                            <% } %>
                        </select>
                    </div>
                </div><br>
                <div class="col-12">
                    <div class="form-material floating">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                </div><br>
                <div class="col-12">
                    <div class="form-material floating">
                        <input type="password" name="mdp" class="form-control" placeholder="Password">
                    </div>
                </div><br>
                <div class="col-12">
                    <div class="form-material floating">
                    <input type="submit" value="Valider" style="width: 100%;padding: 5px;">
                    </div>
                </div>
            </form>
        </div>
        
    </body>
</html>
